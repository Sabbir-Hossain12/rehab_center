@extends('backend.layout.layout')


@section('contentHeader')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Testimonial List</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Testimonial</li>
                </ol>

            </div><!-- /.col -->
            </div>

        <div class="row my-3 mx-1">
            <div>
                <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Add Testimonial</a>
            </div>
        </div>
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

@endsection

@section('mainContents')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Testimonial Section</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Review Description</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if ( $testimonials->count() === 0 )
                                <tr>
                                    <td colspan="10">
                                        <div class="alert alert-danger text-center" role="alert">
                                             There is no data here
                                        </div>
                                    </td>
                                </tr>
                            @else
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{  $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ asset( $testimonial->img  ) }}" alt="" style="width: 75px;">
                                        </td>
                                        <td>{{ $testimonial->name }}</td>

                                        <td>{{ $testimonial->address }}</td>
                                        <td>{{ substr($testimonial->description, 0, 100) }}....</td>
                                        <td>
                                            @if ( $testimonial->status == 1 )
                                               <span class="badge text-bg-primary">Active</span>
                                            @else
                                                <span class="badge text-bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <ul class="d-flex justify-content-center align-items-center" style="list-style: none;">
                                                <li >
                                                    <a href="{{ route('testimonial.edit', $testimonial->id) }}">
                                                        <button type="button" class="btn btn-primary">Edit</button>
                                                    </a>
                                                </li>
                                                <li style="margin-left: 12px">
                                                    <a href="{{ route('testimonial.destroy', $testimonial->id) }}">
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
