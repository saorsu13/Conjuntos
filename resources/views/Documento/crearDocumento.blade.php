@extends('layouts.app')

@section('page-title', 'Iso One - Documentos')

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js')}}"></script>

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

<!-- Icons -->
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css')}}" />

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
<script src="{{ asset('assets/vendor/js/template-customizer.js')}}"></script>
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js')}}"></script>
@section('page-content')

<!-- Bootstrap Select -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Configurar Nuevo Documento</h5>
        <div class="card-body">
            <div class="row">

                <form action="{{ route('agregarDocumento') }}" method="POST" class="form-horizontal" role="form" id="formData">
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Sistema de Gestion</label>
                        <select name="sistemaGestion" id="sistemaGestion" class="selectpicker w-100" data-style="btn-default">
                            @foreach($requisitos as $requisito)
                            <option value="{{$requisito -> requisito_id}}">{{$requisito -> nombre}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <label for="localizacion" class="form-label">localizacion</label>
                            <select name="localizacion" id="localizacion" class="selectpicker w-100" data-style="btn-default">
                                @foreach($localizaciones as $localizacion)
                                <option value="{{$localizacion -> localizacion_id}}">{{$localizacion -> nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6" style="margin-top: 10px;">
                            <label for="departamento" class="form-label">Departamento</label>
                            <select name="departamento" id="departamento" class="selectpicker w-100" data-style="btn-default">
                                @foreach($departamentos as $departamento)
                                <option value="{{$departamento -> departamento_id}}">{{$departamento -> nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Proceso</label>
                        <select name="proceso" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                            @foreach($procesos as $proceso)
                            <option value="{{$proceso -> proceso_id}}">{{$proceso -> nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Tipo de Documento</label>
                        <select name="tipoDocumento" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                            @foreach($tipoDocumentos as $tipoDocumento)
                            <option value="{{$tipoDocumento -> tipo_documento_id}}">{{$tipoDocumento -> nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Descripcion</label>
                        <textarea name="descripcion" rows="2" cols="50" class="form-control"></textarea>
                    </div>
                    <div class="row gy-3 mt-3">
                        <div class="col-sm-6">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input name="codigo" type="text" class="form-control" id="codigo" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="col-sm-6">
                            <div class="text-light small fw-semibold mb-3">Activar</div>
                            <label class="switch switch-lg">
                                <input type="checkbox" class="switch-input" id="estadoDocumento" />
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"><i class="bx bx-check"></i></span>
                                    <span class="switch-off"><i class="bx bx-x"></i></span>
                                </span>
                                <span class="switch-label"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Version</label>
                        <input name="version" type="text" class="form-control" id="version" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Responsable Editar</label>
                        <select name="responsableEditor" id="responsableEditor" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                            @foreach($usuarios as $usuario)
                            <option value="{{$usuario -> usuario_id}}">{{$usuario -> cargo}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Responsable Revisar</label>
                        <select name="responsableRevisar" id="responsableRevisar" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                            @foreach($usuarios as $usuario)
                            <option value="{{$usuario -> usuario_id}}">{{$usuario -> cargo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Responsable Aprobar</label>
                        <select name="responsableAprobar" id="responsableAprobar" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
                            @foreach($usuarios as $usuario)
                            <option value="{{$usuario -> usuario_id}}">{{$usuario -> cargo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success" id="btnSave" style="margin-top: 15px;">Guardar</button>
                    <a class="btn btn-danger" style="margin-top: 15px;" href="">Eliminar</a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /Bootstrap Select -->

@endsection

@section('script-core')

@endsection

@section('script-vendor')
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
@endsection

@section('script-main')

@endsection

@section('script-page')
<!-- Page JS -->
<script src="{{ asset('assets/js/forms-editors.js')}}"></script>

@endsection