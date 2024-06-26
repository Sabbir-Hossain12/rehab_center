@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Store or Update Choose Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Choose Us</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('choose.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
               
{{--  Titles   --}}
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Title 1</label>
                        <input type="text" class="form-control" value="{{$choose->title_1}}" name="title_1" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Title 2</label>
                        <input type="text" class="form-control" value="{{$choose->title_2}}" name="title_2" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Title 3</label>
                        <input type="text" class="form-control" value="{{$choose->title_3}}" name="title_3" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Title 4</label>
                        <input type="text" class="form-control" value="{{$choose->title_4}}" name="title_4" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Title 5</label>
                        <input type="text" class="form-control" value="{{$choose->title_5}}" name="title_5" id="Title" placeholder="Enter Title">
                    </div>
                </div>

               

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 1</label>
                        <textarea class="form-control"  name="text_1" id="" >{{$choose->text_1}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 2</label>
                        <textarea class="form-control"  name="text_2" id="" >{{$choose->text_2}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 3</label>
                        <textarea class="form-control"  name="text_3" id="" >{{$choose->text_3}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 4</label>
                        <textarea class="form-control"  name="text_4" id="" >{{$choose->text_4}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 5</label>
                        <textarea class="form-control"  name="text_5" id="" >{{$choose->text_5}}</textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Title">Text 6</label>
                        <textarea class="form-control"  name="text_6" id="" >{{$choose->text_6}}</textarea>
                    </div>
                </div>

             
                

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Image 1</label>
                        <input class="form-control" type="file"  name="img_1" >
                        <img class="mt-2" src="{{asset($choose->img_1)}}" alt="" style="width: 150px;">
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Image 2</label>
                        <input class="form-control" type="file"  name="img_2" >
                        <img class="mt-2" src="{{asset($choose->img_2)}}" alt="" style="width:150px;">
                    </div>

                </div>
               

            
            
             
               
                

            

         
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

   




@endsection
