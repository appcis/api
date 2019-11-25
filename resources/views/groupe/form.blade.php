@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if($groupe->id)
                    <h1 class="m-0 text-dark">Edition du groupe</h1>
                @else
                    <h1 class="m-0 text-dark">Nouveau groupe</h1>
                @endif
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
                    <form role="form" method="POST"
                          action="@if($groupe->id){{ route('groupe.update', $groupe) }}
                          @else{{ route('groupe.store') }}@endif">
                        @csrf
                        @if($groupe->id)
                            @method('PUT')
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="libelle">Libelle</label>
                                <input type="text" class="form-control" id="libelle" placeholder="Libelle"
                                       name="libelle" value="{{ $groupe->libelle }}">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $groupe->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Membres du groupe</label>
                                <div class="row">
                                    @forelse($agents as $agent)
                                        <div class="form-check col-md-6 col-lg-4">
                                            <input class="form-check-input" type="checkbox" name="agents[]"
                                                   value="{{ $agent->id }}" id="agent_{{ $agent->id }}"
                                                   @if($groupe->agents->find($agent->id)) checked @endif>
                                            <label class="form-check-label" for="agent_{{ $agent->id }}">
                                                {{ $agent->nom . " " . $agent->prenom }}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

@endsection
