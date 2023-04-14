@extends('layouts.app')

@section('page-title', 'Iso One - Requisito')

@section('page-content')

<div class="container-xxl flex-grow-1 container-p-y">

    <hr class="my-2" />

    <!-- Responsive Datatable -->
    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Dashboard -> Requisitos </a>
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="">
                    <a class="btn btn-primary" href="{{ route('crearLocalizacion')}}" role="button" title="Agregar Nueva Localizacion">
                        <i class="fas fa-puzzle-piece"></i>
                    </a>
                    <a class="btn btn-primary" href="" role="button" title="Recargar Tabla">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Editar Localizacion">
                        <i class="fas fa-cloud-download"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Eliminar Localizacion">
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
        <br />

        <!-- Column Search -->
        <div class="card">
            <h5 class="card-header">Listado de Requisitos</h5>
            <div class="card-datatable text-nowrap">
                <table class="dt-column-search table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($requisitos as $requisito)
                        <tr>
                            <th>{{$requisito -> nombre}}</th>
                            <th>{{$requisito -> codigo}}</th>
                            <th>{{$requisito -> descripcion}}</th>
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