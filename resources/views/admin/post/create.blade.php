@extends('admin.layouts.app')
@section('title','Create Post')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Post Editors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}" class="text-cyan">Posts</a></li>
                        <li class="breadcrumb-item active">Create Posts</li>
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
                        <h3 class="card-title">Create Post</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    @include('include.message')

                    <div class="card-body pad">
                            <form role="form" action="{{ route('post.store') }}" method="post">@csrf
                            <div class="col-lg-6 float-lg-left">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="subtitle">Post Sub Title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Sub Title">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                                </div>


                                <div class="form-group">
                                    <label for="body">Write Post Body Here</label>
                                    <textarea name="body" class="textarea form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    <p class="text-sm mb-0">
                                        Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                                            information.</a>
                                </div>

                            </div>
                            <div class="col-lg-5 float-lg-right">
                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="status" name="status">
                                    <label class="form-check-label" for="status">Publish</label>
                                </div>
                                <br>

                                <div class="card-footer">
                                    <a href="{{ route('post.index') }}" class="btn btn-outline-warning">Back</a> &nbsp;
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
