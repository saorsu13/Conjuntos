@extends('layouts.app')

@section('page-title','Iso One - Documentos')
<!-- Helpers -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

@section('page-content')
<div class="container-xxl flex-grow-1 container-p-y">

    <hr class="my-2" />

    <!-- Responsive Datatable -->
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Documentos -> Administrar -> Procesamiento</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="">
                    <a class="btn btn-primary" href="{{route('documentList')}}" role="button" title="Recargar Tabla">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-primary" href="documentCreate" role="button" title="Agregar Documento">
                        <i class="fas fa-puzzle-piece"></i>
                       
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Exportar Excel">
                        <i class="fas fa-cloud-download"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('editDocument')}}" role="button" title="Editar Documentos">
                        <i class="fas fa-edit"></i>
                    </a>

                </div>
            </div>

        </nav>
        <br />

        <!-- Column Search -->
        <div class="card">
            <h5 class="card-header">Listado de Documentos para Procesar</h5>
            <div class="card-datatable text-nowrap">
                <table class="dt-column-search table table-bordered">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Version</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                        <tr>
                            <th></th>
                            <th>{{$document->code}}</th>
                            <th>{{$document->name}}</th>
                            <th>{{$document->version}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Column Search -->
    </div>
    <!--/ Responsive Datatable -->
</div>
@endsection