@extends('layouts.app')

@push('style_before')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Envoyer un SMS</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Sms</a></li>
                        <li class="breadcrumb-item active">Nouveau message</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <form role="form" method="POST"
                  action="#">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary" id="tape_sms_card">
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" id="select_dest_btn">Sélectionner les
                                    destinataires
                                </button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary" id="select_dest_card" style="display: none">
                            <div class="card-body">
                                <div class="form-group d-sm-none">
                                    <label for="message">Message</label>
                                    <p class="form-control" id="repeatMessage" readonly></p>
                                </div>
                                <div class="form-group">
                                    <label for="groupes">Choix des destinataires</label>
                                    @forelse($groupes as $groupe)
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="groupe_{{ $groupe->id ?? $loop->index }}" name="groupe_{{ $groupe->id ?? $loop->index }}"
                                                   value="true">
                                            <label for="groupe_{{ $groupe->id ?? $loop->index }}" class="custom-control-label">{{ $groupe->libelle }}</label>
                                        </div>
                                    @empty
                                        Aucun groupe créer
                                    @endforelse
                                </div>
                                <div class="card card-info collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Listes des agents</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body p-2">
                                        <div class="form-group">
                                            <div class="row">
                                                @isset($agents)
                                                    <div class="col">
                                                        @foreach($agents as $agent)
                                                            @if($loop->even)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <label class="form-check-label">{{ $agent->nom }}</label>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col">
                                                        @foreach($agents as $agent)
                                                            @if($loop->odd)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <label class="form-check-label">{{ $agent->nom }}</label>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @else
                                                    Aucun agent créer
                                                @endisset
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('script')
    <!-- Select2 -->
    <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
@endpush
