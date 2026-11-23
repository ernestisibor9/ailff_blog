@extends('admin.admin_dashboard')

@section('admin')


@section('title')
AILFF - Add Post
@endsection


<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Add Post</h4>
                    <form action="{{ route('store.post') }}" method="post" class="forms-sample"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="input1" class="form-label">Post Category </label>
                                <select name="blogcat_id" class="form-control @error('blogcat_id')is-invalid @enderror mb-3" aria-label="Default select example">
                                    <option selected="">Select Blog Category</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label for="input1" class="form-label">Post Title</label>
                                <input type="text" name="post_title" class="form-control @error('post_title')is-invalid @enderror" id="input1">
                            </div>
                            @error('post_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        {{-- <div class="form-group col-12">
                            <label for="input1" class="form-label">YouTube URL</label>
                            <input type="text" name="video_url" class="form-control" id="input1">
                        </div> --}}
                        <div class="form-group col-md-12">
                            <label for="input1" class="form-label">Post Description</label>
                            <textarea name="long_descp" class="form-control @error('long_descp')is-invalid @enderror" id="mytextarea"></textarea>
                        </div>
                        @error('long_descp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                        <div class="col-md-6">
                        </div>

                        <div class="row">
                            <div class="form-group col-8">
                                <label for="input2" class="form-label">Post Image <span class="text-danger">
                                    </span></label>
                                <input class="form-control @error('post_image')is-invalid @enderror" name="post_image"
                                    type="file" id="image">
                                @error('post_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-4">
                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin"
                                    class="rounded-circle p-1 bg-primary" width="80">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-8">
                                <label for="input2" class="form-label">Post Multiple Images <span class="text-danger">
                                    </span></label>
                                <input class="form-control @error('multi_photo')is-invalid @enderror"  name="multi_photo[]"
                                    type="file" id="multiImg" multiple>
                                @error('multi_photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-4">
                                <div class="row" id="preview_img"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Add Post</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb').attr('src', e.target.result).width(130).height(110);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('#multiImg').on('change', function() { //on file input change
            if (window.File && window.FileReader && window.FileList && window
                .Blob) //check File API supported browser
            {
                var data = $(this)[0].files; //this file data

                $.each(data, function(index, file) { //loop though each file
                    if (/(\.|\/)(gif|jpeg|png|webp)$/i.test(file
                            .type)) { //check supported file type
                        var fRead = new FileReader(); //new filereader
                        fRead.onload = (function(file) { //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src',
                                        e.target.result).width(100)
                                    .height(80); //create image element
                                $('#preview_img').append(
                                    img); //append image to output element
                            };
                        })(file);
                        fRead.readAsDataURL(file); //URL representing the file's data.
                    }
                });

            } else {
                alert("Your browser doesn't support File API!"); //if File API is absent
            }
        });
    });
</script>

@endsection
