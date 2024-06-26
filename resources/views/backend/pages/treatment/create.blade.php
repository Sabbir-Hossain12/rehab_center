@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add treatment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add treatment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('treatment.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">treatment Title</label>
                        <input type="text" class="form-control" name="treat_title" id="Title"
                               placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">treatment Image</label>
                        <input class="form-control" type="file" name="treat_img" id="Thumbnail">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">treatment Description</label>
                        <textarea class="form-control" name="treat_desc" id=""></textarea>
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
