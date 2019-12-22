@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Agents <a role="button" class="btn btn-success" href="{{ route('agent.create') }}"><i class="fas fa-plus-circle"></i></a></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Agent</a></li>
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
                                <th></th>
                                <th>Grade</th>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th style="width: 10px"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($agents as $agent)
                                    <tr data-href="{{ route('agent.edit', $agent) }}">
                                        <td class="text-center">
                                            @if($agent->statut)
                                                <i class="fas fa-check text-success"></i>
                                            @else
                                                <i class="fas fa-times text-danger"></i>
                                            @endif
                                        </td>
                                        <td></td>
                                        <td>{{ $agent->nom }}</td>
                                        <td>{{ $agent->telephone }}</td>
                                    </tr>
                                @empty
                                @endforelse
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
