@extends('admin.admin_dashboard')

@section('admin')


@section('title')
    AILFF - Add Advert
@endsection


<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Add Advert</h4>
                    <form action="{{ route('store.ads') }}" method="post" class="forms-sample"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Title</label>
                            <input type="text" name="title" placeholder="title" class="form-control" id="input1"
                                required>
                        </div>
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Company Name</label>
                            <input type="text" name="company_name" placeholder="company name" class="form-control"
                                id="input1" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Page Location</label>
                            <select class="form-control" id="page_location" name="page_location" required>
                                <option value="home">Home Page</option>
                                <option value="about">About Page</option>
                                <option value="blog">Blog Page</option>
                                <option value="top">Top Section</option>
                                <option value="footer">Footer Section</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="input1" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="input1" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" id="input1" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="input2" class="form-label">Ads Photo <span class="text-danger">
                                    (width: 334px : height: 262px)</span> </label>
                            <input class="form-control  @error('photo')is-invalid @enderror" name="photo"
                                type="file" id="image">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="input2" class="form-label">Ads Banner <span class="text-danger">
                                    (width: 750px : height: 92px)</span> </label>
                            <input class="form-control @error('banner')is-invalid @enderror" name="banner"
                                type="file" id="image">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Add Ads</button>
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

@endsection
