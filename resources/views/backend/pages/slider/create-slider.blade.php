@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Slider</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" name="slider_title" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Image</label>
                        <input class="form-control" type="file" name="slider_img" id="Thumbnail">
                    </div>
                </div>

                <div class="col-md-12" style="color: #0a0e14">
                    <label for="summernote">Description</label>
                    <textarea class="" id="summernote" name="slider_desc"></textarea>
                </div>

            

            <div class="col-md-12 my-0 py-0">
                <label class="form-label">Status</label>
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

    <script src="{{asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>


    <script>
       
            
    let jReq;
    ClassicEditor
        .create(document.querySelector('#summernote'))
        .then(newEditor => {
            jReq = newEditor;
        })
        .catch(error => {
            console.error(error);
        });
            
       


</script>

@endsection
