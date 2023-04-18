@extends('layouts.app')

@section('page-title', 'Iso One - Departamento')

@section('page-content')

<div class="container-xxl flex-grow-1 container-p-y">

    <hr class="my-2" />

    <!-- Responsive Datatable -->
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Dashboard -> Departamentos </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="">
                    <a class="btn btn-primary" href="{{ route('crearDocumento')}}" role="button" title="Agregar Nuevo Documento">
                        <i class="fas fa-puzzle-piece"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('indexDepartamento')}}" role="button" title="Recargar Tabla">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('editarDocumentoHtml')}}" role="button" title="Editar documento">
                        <i class="fas fa-cloud-download"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Eliminar Usuario">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Salvar Datos">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Cerrar Editor">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
            </div>

        </nav>

        <!-- Column Search -->
        <div class="card" style="margin-top: 15px;margin-left: 20px;margin-right: 20px;">
            <h5 class="card-header">Listado de Departamentos</h5>
            <div class="card-datatable">
                <table class="dt-column-search table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombres</th>
                            <th>Version</th>
                            <th>Proceso</th>
                            <th>Tipo Documento</th>
                            <th>Responsable</th>
                            <th>Viene de</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documentos as $documento)
                        <tr>
                            <th>{{$documento -> codigo}}</th>
                            <th>{{$documento -> nombre}}</th>
                            <th>{{$documento -> version}}</th>
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