@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Store or Update About Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('about.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
               

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" value="{{$about->title}}" name="title" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Text_1</label>
                        <input type="text" class="form-control" value="{{$about->text_1}}" name="text_1" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text_2</label>
                        <textarea class="form-control"  name="text_2" id="" >{{$about->text_2}}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text_3</label>
                        <textarea class="form-control"  name="text_3" id="" >{{$about->text_3}}</textarea>
                    </div>
                </div>
                

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Side Image</label>
                        <input class="form-control" type="file"  name="side_img" >
                        <img src="{{asset($about->side_img)}}" alt="" style="width: 90px;">
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Image Link</label>
                        <input class="form-control" type="text" value="{{$about->img_link}}"  name="img_link" >
                    
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Satisfy Customers</label>
                        <input class="form-control" type="text" value="{{$about->customers}}" name="customers" >
                      
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Years of Experience</label>
                        <input class="form-control" type="text" value="{{$about->years}}" name="years" >
                    
                    </div>

                </div>
             
               
                

            

         
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

   




@endsection
