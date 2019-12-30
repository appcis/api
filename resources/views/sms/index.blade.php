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
                <div class="col-md-6">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="position-relative">
                                        <div class="ribbon-wrapper ribbon-lg">
                                            <div class="ribbon bg-primary">
                                                12/12/2019
                                            </div>
                                        </div>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas arcu id
                                        magna efficitur, sit amet imperdiet ipsum vulputate. Ut vulputate auctor nisi,
                                        dapibus semper justo efficitur in. Maecenas efficitur metus eu elementum
                                        consequat. Duis posuere.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
