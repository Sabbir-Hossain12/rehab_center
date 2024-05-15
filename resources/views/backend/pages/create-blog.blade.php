@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Blogs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Blogs</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



@endsection

@section('mainContents')

    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Blog Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Short Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Short Description">
            </div>
            
            
            
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>

         <div class="form-group" style="color: #0a0e14">
             <label for="summernote" style="color: #fff">Long Description </label>
                <textarea class="" id="summernote" name="editordata"></textarea>
         </div>
        </div>
        <!-- /.card-body -->

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