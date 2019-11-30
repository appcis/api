@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title ?? "Titre" }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
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
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form role="form" method="POST" action="{{ $action ?? "#" }}">
                            @csrf
                            @if($user->id)
                                @method('PUT')
                            @endif
                            <input type="hidden" value="{{ $user->active ? 1 : 0 }}" name="active">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nom" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email" name="email"  value="{{ $user->email }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="col p-0">
                                        @if($user->id)
                                            @if($user->active)
                                                <button type="button" class="btn btn-danger desactiver">Desactiver</button>
                                            @else
                                                <button type="button" class="btn btn-success activer">Activer</button>
                                            @endif
                                            <a href="{{ route('user.resetPassword', $user) }}" type="button" class="btn btn-primary" role="button">Réinitialiser le mot de passe</a>
                                        @endif
                                    </div>
                                    <div class="col text-right p-0">
                                        <a type="button" href="{{ URL::previous() }}" class="btn btn-default">Annuler</a>
                                        <button type="submit" class="btn btn-success">Valider</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

@endsection
