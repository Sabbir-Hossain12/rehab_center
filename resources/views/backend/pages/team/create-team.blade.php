@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create team</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Team</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Member Name</label>
                        <input type="text" class="form-control" name="team_name" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Member Image</label>
                        <input class="form-control" type="file" name="team_img" id="Thumbnail">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Designation</label>
                        <input type="text" class="form-control" name="designation" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Twitter Link (optional)</label>
                        <input type="text" class="form-control" name="twitter_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Facebook Link (optional)</label>
                        <input type="text" class="form-control" name="facebook_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Google Link (optional)</label>
                        <input type="text" class="form-control" name="google_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Instagram Link (optional)</label>
                        <input type="text" class="form-control" name="instagram_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>


           

            <div class="col-md-12 pt-3">
                <label for="">Status</label>
               <select class="form-control" name="status">
                  <option selected disabled>Open this status menu</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
              </select>
            </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

   




@endsection
