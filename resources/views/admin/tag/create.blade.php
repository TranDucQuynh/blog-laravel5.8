@extends('admin.layouts.app')
@section('title','Create Tag')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tag Editors</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('tag.index') }}" class="text-cyan">Tags</a></li>
                            <li class="breadcrumb-item active">Create Tag</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Tag</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        @include('include.message')

                        <div class="card-body pad">
                            <form role="form" action="{{ route('tag.store') }}" method="post">@csrf
                                <div class="col-lg-6 m-md-auto">
                                    <div class="form-group">
                                        <label for="name">Tag Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tag Name">
                                    </div>
                                    <div class="form-group">
                                        <label for=slug>Tag Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Tag Slug">
                                    </div>

                                    <div class="card-footer">
                                        <a href="{{ route('tag.index') }}" class="btn btn-outline-warning">Back</a> &nbsp;
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
