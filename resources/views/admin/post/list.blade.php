@extends('admin.layouts.app')
@section('title','List Post')

{{-- CSS của riêng trang này --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

{{-- JS của riêng trang này --}}
@section('js')
    @parent
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $("#example1").DataTable();
        // $('#example1').DataTable({
        //     "paging": true,
        //     "lengthChange": true,
        //     "searching": true,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": true,
        // });
    </script>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">List Post</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Posts <a href="{{ route('post.create') }}" class="ml-5 btn btn-success" title="Add Post"><i class="fa fa-plus"></i></a></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool text-danger" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Sub Title</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Posted by</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->subtitle }}</td>
                        <td>{{ $post->slug }}</td>
                        <td><img src="{{ $post->image }}" alt="{{ $post->title }}"></td>
                        <td>@if($post->status==1) <strong class="text-success">Publish</strong> @else <strong class="text-danger">Unpublish</strong> @endif</td>
                        <td>{{ $post->posted_by }}</td>
                        <td class="text-center"><a href="" class="btn btn-outline-warning"><i class="fa fa-pencil-alt"></i></a> &nbsp; <a href="" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection
