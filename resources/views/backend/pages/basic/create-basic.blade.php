@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Store or Update Basic info</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Basic info</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('basic.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Address</label>
                        <input type="text" class="form-control" value="{{$basics->address}}" name="address" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Logo image</label>
                        <input class="form-control" type="file"  name="logo_img" id="Thumbnail">
                    </div>
                    <div>
                        <img src="{{asset($basics->logo_img)}}" alt="image" style="width: 80px "/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Phone 1</label>
                        <input type="text" class="form-control" value="{{$basics->phone_1}}" name="phone_1" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Phone 2</label>
                        <input type="text" class="form-control"  value="{{$basics->phone_2}}" name="phone_2" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Email</label>
                        <input type="text" class="form-control" value="{{$basics->email}}" name="email" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Website</label>
                        <input type="text" class="form-control" value="{{$basics->website}}" name="website" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">fb_link</label>
                        <input type="text" class="form-control" value="{{$basics->fb_link}}" name="fb_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">twitter_link</label>
                        <input type="text" class="form-control" value="{{$basics->twitter_link}}" name="twitter_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">instagram_link</label>
                        <input type="text" class="form-control" value="{{$basics->instagram_link}}" name="instagram_link" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Business Opening Hours </label>
                        <input type="text" class="form-control" value="{{$basics->business_opening}}"  name="business_opening" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Business Closing Hours</label>
                        <input type="text" class="form-control" value="{{$basics->business_closing}}"   name="business_closing" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">service 1</label>
                        <input type="text" class="form-control" value="{{$basics->service_1}}" name="service_1" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Title">service 2</label>
                            <input type="text" class="form-control" value="{{$basics->service_2}}" name="service_2" id="Title" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Title">service 3</label>
                            <input type="text" class="form-control" value="{{$basics->service_3}}" name="service_3" id="Title" placeholder="Enter Title">
                        </div>
                    </div>
                

            

         
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

   




@endsection
