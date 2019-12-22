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
                                <button type="submit" class="btn btn-primary" id="select_dest_btn">Sélectionner les destinataires</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary" id="select_dest_card" style="display: none">
                            <!-- form start -->
                            <!-- Bootstrap 4 -->
                            <!--<div class="card-body">
                                <div class="form-group">
                                    <label for="groupes">Choix des destinataires</label>
                                    <select id="groupes" class="form-control select2" multiple="multiple" style="width: 100%;">
                                        <option>INC 2</option>
                                        <option>SAP 2</option>
                                        <option>COD 2</option>
                                        <option>Général</option>
                                        <option>Bureau amicale</option>
                                        <option>COD 4</option>
                                    </select>
                                </div>
                            </div>-->
                            <!-- /.card-body -->
                            <div class="card-body">
                                <div class="form-group">
                                    <textarea name="message" id="message"
                                              class="form-control" readonly>lorem ipsum dolor sit amet</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="groupes">Choix des destinataires</label>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">Général</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">INC 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">SAP 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">COD 2</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">COD 4</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                        <label for="customCheckbox1" class="custom-control-label">Bureau amicale</label>
                                    </div>
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
