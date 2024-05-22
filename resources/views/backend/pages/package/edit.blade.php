@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Package</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Package</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

@endsection

@section('mainContents')

    <form method="POST" action="{{ route('package.update', $package->id) }}">
        @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Package Name</label>
                        <input type="text" class="form-control" value="{{$package->pack_name}}" name="pack_name" id="Title" placeholder="Enter Title">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Package Duration</label>
                        <input type="text" class="form-control" value="{{$package->duration}}" name="duration" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Package Price</label>
                        <input type="text" class="form-control" value="{{$package->pack_price}}" name="pack_price" id="Title" placeholder="Enter Title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Title">Button 1</label>
                        <input type="text" class="form-control" value="{{$package->btn_1}}" name="btn_1" id="Title" placeholder="Enter Title">

                    </div>
                </div>




                <div class="col-md-12" style="color: #0a0e14">
                    <label for="summernote">Content</label>
                    <textarea class="" id="summernote"  name="content">{{$package->content}}</textarea>
                </div>

                <div class="col-md-12 pt-3">
                    <label for="">Status</label>
                    <select class="form-control" name="status">
                        <option selected disabled>Open this status menu</option>
                        <option value="1" @if($package->status==1) selected @endif >Active</option>
                        <option value="0" @if($package->status==0) selected @endif>Inactive</option>
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
