@extends('layouts.app')

@section('page-title', 'Listado de Casas - Iso One')

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
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Listado de Casas</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Número de Casa</th>
                                <th>Descripción</th>
                                <th>Arrendado</th>
                                <th>En Venta</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($casas as $casa)
                            <tr>
                                <td>{{ $casa->numero_casa }}</td>
                                <td>{{ $casa->descripcion }}</td>
                                <td>{{ $casa->arrendado ? 'Sí' : 'No' }}</td>
                                <td>{{ $casa->en_venta ? 'Sí' : 'No' }}</td>
                                <td>
                                    <a href="{{ route('editarCasa', ['id' => $casa->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <a href="{{ route('eliminarCasa', ['id' => $casa->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta casa?')">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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