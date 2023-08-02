@extends('layouts.app')

@section('page-title', 'Editar Casa - Iso One')

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
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Casa</div>
                <div class="card-body">
                    <form action="{{ route('actualizarCasa', ['id' => $casa->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="numero_casa">Número de Casa</label>
                            <input name="numero_casa" type="text" class="form-control" id="numero_casa" placeholder="" aria-describedby="numeroCasaHelp" value="{{ $casa->numero_casa }}" />
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" rows="2" class="form-control">{{ $casa->descripcion }}</textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="arrendado" id="arrendado" value="1" class="form-check-input" {{ $casa->arrendado ? 'checked' : '' }}>
                            <label for="arrendado" class="form-check-label">Arrendado</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="en_venta" id="en_venta" value="1" class="form-check-input" {{ $casa->en_venta ? 'checked' : '' }}>
                            <label for="en_venta" class="form-check-label">En Venta</label>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-sm btn-success mr-2">Guardar</button>
                            <a class="btn btn-sm btn-danger" href="{{ route('indexCasas')}}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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