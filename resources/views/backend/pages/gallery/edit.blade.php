@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Gallery</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Blogs</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Image Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $gallery->title }}" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="Thumbnail" class="form-label">Image</label>
                        <input class="form-control" type="file" value="{{ $gallery->img_path }}" name="thumbnail" id="Thumbnail">
                        <img src="{{ asset( $gallery->img_path ) }}" alt="" style="width: 75px;">
                    </div>
                </div>
            </div>

            

            <div class="col-md-12">
                <select class="form-control" name="status">
                   <option selected disabled>Open this status menu</option>
                   <option value="1" {{$gallery->status===1 ? 'selected' :''}}>Active</option>
                   <option value="0" {{$gallery->status===0 ? 'selected' : ''}}>Inactive</option>
               </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

{{--    <script src="{{asset('https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js')}}"></script>--}}


{{--    <script>--}}
{{--    let jReq;--}}
{{--    ClassicEditor--}}
{{--        .create(document.querySelector('#summernote'))--}}
{{--        .then(newEditor => {--}}
{{--            jReq = newEditor;--}}
{{--        })--}}
{{--        .catch(error => {--}}
{{--            console.error(error);--}}
{{--        });--}}


{{--</script>--}}

@endsection
