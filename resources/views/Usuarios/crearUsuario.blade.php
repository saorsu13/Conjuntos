@extends('layouts.app')

@section('page-title', 'Iso One - Home')

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
@section('page-content')

<!-- Bootstrap Select -->
<div class="col-12">
    <div class="card">
        <h5 class="card-header">Bootstrap Select</h5>
        <div class="card-body">
            <div class="row">

                <form action="{{ route('agregarUsuario') }}" method="POST" class="form-horizontal" role="form" id="bootstrap">

                    <div class="form-check col-sm-6">
                        <input name="activo" class="form-check-input" type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Activo
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="defaultFormControlInput" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6">
                        <label for="defaultFormControlInput" class="form-label">Correo Electronico</label>
                        <input name="correoElectronico" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6">
                        <label for="defaultFormControlInput" class="form-label">Contraseña</label>
                        <input name="contraseña" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6">
                    <label for="selectpickerBasic" class="form-label">Rol</label>
                    <select name="rol" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                        <option>Usuario</option>
                        <option>Invitado</option>
                        <option>Administrador</option>
                        <option>Webmaster</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                    <label for="selectpickerBasic" class="form-label">Cargo</label>
                    <select name="cargo" id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                        <option value="1">Auditor Interno</option>
                        <option value="2">Auxiliar Siso</option>
                        <option value="3">Coordinador de Calidad</option>
                        <option value="4">Coordinador(a) A</option>
                        <option value="5">Coordinador(a) AA</option>
                        <option value="6">Coordinador(a) AAA</option>
                        <option value="7">Coordinador(a) SGI</option>
                        <option value="8">Coordinador(a) SST</option>
                        <option value="9">Gerente Regional de Calidad</option>
                        <option value="10">profesional SST</option>
                        <option value="11">Siso</option>
                        <option value="12">Almacenista</option>
                        <option value="13">Plant Superintendent</option>
                        <option value="14">Plant Superintendent(C)</option>
                        <option value="15">Plant Superintendent(D)</option>
                        <option value="16">Analista de Informacion Comercial</option>
                        <option value="17">Ejecutiva Comercial</option>
                        <option value="18">Analista de Compras</option>
                        <option value="19">Auxiliar de Compras</option>
                    </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="defaultFormControlInput" class="form-label">Localizacion Usuario</label>
                        <input name="localizacionUsuario" type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                    </div>

                    <button class="btn btn-success">Guardar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /Bootstrap Select -->

@endsection
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>

<script src="{{ asset('assets/vendor/libs/hammer/hammer.js')}}"></script>

<script src="{{ asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/forms-selects.js')}}"></script>
<script src="{{ asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{ asset('assets/js/forms-typeahead.js')}}"></script>


<!-- build:js assets/vendor/js/core.js -->