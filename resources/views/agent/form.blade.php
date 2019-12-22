@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">@if($agent->id) Edition @else Nouvel @endif agent</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('agent.index') }}">Agent</a></li>
                    <li class="breadcrumb-item active">Nouvel agent</li>
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
                    <form role="form" method="POST" action="@if($agent->id){{ route('agent.update', $agent) }}@else{{ route('agent.store') }}@endif">
                        @csrf
                        @if($agent->id)
                            @method('PUT')
                        @endif
                        <input type="hidden" value="{{ $agent->statut ? 1 : 0 }}" name="statut">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="{{ $agent->nom }}">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="prenom" value="{{ $agent->prenom }}">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="text" class="form-control" id="telephone" placeholder="0600010203" name="telephone"  value="{{ $agent->telephone }}">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <div class="p-0">
                                    @if($agent->statut && $agent->id)
                                        <button type="button" class="btn btn-danger desactiver">Desactiver</button>
                                    @elseif(!$agent->statut && $agent->id)
                                        <button type="button" class="btn btn-success activer">Activer</button>
                                    @endif
                                </div>
                                <div class="text-right p-0">
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
