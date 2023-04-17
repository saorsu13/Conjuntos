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
        <h5 class="card-header">Editar el Departamento</h5>
        <div class="card-body">
            <div class="row">

                <form action="{{ route('actualizarDepartamento',['id' => $departamentos->departamentos_id]) }}" method="POST" class="form-horizontal" role="form" id="bootstrap">
                    @method('PUT')
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="defaultFormControlInput" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="defaultFormControlInput" placeholder="{{$departamentos -> nombre}}" aria-describedby="defaultFormControlHelp" />
                    </div>
                    <div class="col-sm-6" style="margin-top: 10px;">
                        <label for="selectpickerBasic" class="form-label">Descripcion</label>
                        <textarea name="descripcion" placeholder="{{$departamentos -> descripcion}}" rows="2" cols="50" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-4" style="margin-top: 10px;">
                        <label for="select2Multiple" class="form-label">Multiple</label>
                        <select id="Localizaciones_dptos[]" class="select2 form-select" multiple>
                            @foreach($Localizaciones as $localizacion)
                            <option selected="{{$departamentos -> localizacion_dptos}}">{{$localizacion -> nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success">Actualizar</button>
                    <a class="btn btn-danger" href="{{ route('indexDepartamento')}}">Eliminar</a>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- /Bootstrap Select -->

@endsection

@section('script-core')

@endsection
<!-- endbuild -->

@section('script-vendor')
<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
@endsection


<!-- Main JS -->
@section('script-main')

@endsection

<!-- Page JS -->
@section('script-page')
<script src="{{ asset('assets/js/forms-selects.js')}}"></script>
<script src="{{ asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{ asset('assets/js/forms-typeahead.js')}}"></script>
@endsection
