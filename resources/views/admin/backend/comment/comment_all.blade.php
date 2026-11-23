@extends('admin.admin_dashboard')

@section('admin')


@section('title')
AILFF - All Comment
@endsection

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>Post Title </th>
                                        <th>User Name </th>
                                        <th>Message</th>
                                        <th>Status</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item['post']['post_title'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ substr($item['comment'], 0, 100) }}...</td>
                                            <td>
                                                @if ( $item->approved)
                                                            <span class="badge rounded-pill bg-success">Approved</span>
                                                    @else
                                                            <span class="badge rounded-pill bg-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                @if(!$item->approved)
                                                <form action="{{ route('admin.comments.approve', $item->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm">Approve</button>
                                                </form>
                                            @endif
                                            <form action="{{ route('admin.comments.delete', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
