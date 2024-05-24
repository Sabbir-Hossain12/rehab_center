@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Team</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Team</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Member Name</label>
                        <input type="text" class="form-control" value="{{$team->team_name}}"  name="team_name" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Member Image</label>
                        <input class="form-control" type="file" value="" name="team_img" id="Thumbnail">
                        <img src="{{asset($team->team_img )}}" alt="image" style="width: 70px" />
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Designation</label>
                        <input type="text" class="form-control" value="{{$team->designation }}" name="designation" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Twitter Link (optional)</label>
                        <input type="text" class="form-control" value="{{$team->twitter_link}}" name="twitter_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Facebook Link (optional)</label>
                        <input type="text" class="form-control" value="{{$team->facebook_link}}" name="facebook_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Google Link (optional)</label>
                        <input type="text" class="form-control" value="{{$team->google_link}}" name="google_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Instagram Link (optional)</label>
                        <input type="text" class="form-control" value="{{$team->instagram_link}}"  name="instagram_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>




                <div class="col-md-12 pt-3">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                      
                        <option value="1" @if($team->status==1) selected @endif>Active</option>
                        <option value="0" @if($team->status==0) selected @endif >Inactive</option>
                    </select>
                </div>
                
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

   




@endsection
