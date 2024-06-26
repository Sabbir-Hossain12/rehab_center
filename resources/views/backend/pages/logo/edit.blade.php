@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit logo</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit logo</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('logo.update', $logo->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Logo Title</label>
                        <input type="text" class="form-control" value="{{$logo->logo_title}}" name="logo_title" id="Title" placeholder="Enter Title">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Logo Image</label>
                        <input class="form-control" type="file"  name="logo_img" id="Thumbnail">
                        <img class="mt-2" src="{{asset($logo->logo_img)}}" alt="image" style="width: 120px" />

                    </div>
                </div>





                <div class="col-md-12 pt-3">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                        <option selected disabled>Open this status menu</option>
                        <option value="1" @if($logo->status==1) selected @endif>Active</option>
                        <option value="0" @if($logo->status==0) selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>






@endsection
