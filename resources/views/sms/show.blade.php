@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SMS <small></small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Sms</a></li>
                        <li class="breadcrumb-item active">envoi du 12/12/2019 20:00</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p class="form-control" id="repeatMessage" readonly>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Destinataires</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Agent</th>
                            <th style="width: 50px">Statut</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dest 1</td>
                            <td><span class="badge bg-danger">Erreur</span></td>
                        </tr>
                        <tr>
                            <td>Dest 2</td>
                            <td><span class="badge bg-primary">En attente</span></td>
                        </tr>
                        <tr>
                            <td>Dest 3</td>
                            <td><span class="badge bg-info">Envoyé</span></td>
                        </tr>
                        <tr>
                            <td>Dest 4</td>
                            <td><span class="badge bg-success">Reçu</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
