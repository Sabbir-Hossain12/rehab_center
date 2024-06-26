@extends('backend.layout.layout')


@section('contentHeader')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Logo List</h1>
                </div><!-- /.col -->

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Logo</li>
                    </ol>

                </div><!-- /.col -->
            </div>

            <div class="row my-3 mx-1">
                <div>
                    <a href="{{ route('logo.create') }}" class="btn btn-primary">Add Logo</a>
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
                    <h3 class="card-title">Bottom Logo</h3>

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
                            <th>image</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if ( $logos->count() === 0 )
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-danger text-center" role="alert">
                                        There is no data here
                                    </div>
                                </td>
                            </tr>
                        @else
                            @foreach ($logos as $logo)
                                <tr>
                                    <td>{{  $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset( $logo->logo_img  ) }}" alt="" style="width: 75px;">
                                    </td>
                                    
                                    <td>{{ $logo->logo_title }}</td>


                                    <td>
                                        @if ( $logo->status == 1 )
                                            <span class="badge text-bg-primary">Active</span>
                                        @else
                                            <span class="badge text-bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                       <div>
                                                <a href="{{ route('logo.edit', $logo->id) }}">
                                                    <button type="button" class="btn btn-primary">Edit</button>
                                                </a>
                                       </div>
                                           <form method="post" action="{{route('logo.destroy',$logo->id)}}">
                                               @csrf
                                               @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                        </div>
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
