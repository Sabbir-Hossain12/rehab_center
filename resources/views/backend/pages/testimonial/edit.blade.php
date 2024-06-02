@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Testimonial</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Testimonial</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Testimonial Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}" id="name" placeholder="Enter Name.....">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="img" class="form-label">Testimonial Image</label>
                        <input class="form-control" type="file" name="image" id="img">
                        <img src="{{ $testimonial->img }}" alt="" style="width: 75px: height: 75px;">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $testimonial->address }}" id="address" placeholder="Enter Address....">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description">Review Description</label>
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Enter Review Description....">{{ $testimonial->description }}</textarea>
                    </div>
                </div>


                <div class="col-md-6 pt-3">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option selected disabled>Open this status menu</option>
                        <option value="1" @if( $testimonial->status === 1 ) selected @endif>Active</option>
                        <option value="0" @if( $testimonial->status === 2 ) selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>






@endsection
