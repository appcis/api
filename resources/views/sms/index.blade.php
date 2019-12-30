@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SMS <a role="button" class="btn btn-success"
                                                     href="{{ route('sms.create') }}"><i class="fas fa-plus-circle"></i></a>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">SMS</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire
                            soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-sm" href="#">Detail</a>
                            </div>
                            <div>
                                <small class="text-muted">22/12/2019 15:00</small>
                            </div>
                        </div>
                    </div>
                    <div class="callout callout-danger">
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire
                            soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-sm" href="#">Detail</a>
                            </div>
                            <div>
                                <small class="text-muted">22/12/2019 15:00</small>
                            </div>
                        </div>
                    </div>
                    <div class="callout callout-success">
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire
                            soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-sm" href="#">Detail</a>
                            </div>
                            <div>
                                <small class="text-muted">22/12/2019 15:00</small>
                            </div>
                        </div>
                    </div>
                    <div class="callout callout-success">
                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire
                            soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                        <div class="d-flex justify-content-between">
                            <div>
                                <a class="btn btn-primary btn-sm" href="#">Detail</a>
                            </div>
                            <div>
                                <small class="text-muted">22/12/2019 15:00</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
