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
                    <a class="btn btn-primary" href="{{ route('crearDepartamento')}}" role="button" title="Agregar Nuevo Cargo">
                        <i class="fas fa-puzzle-piece"></i>
                    </a>
                    <a class="btn btn-primary" href="{{route('indexDepartamento')}}" role="button" title="Recargar Tabla">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Editar Usuario">
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
        <br />

        <!-- Column Search -->
        <div class="card" style="margin-top: 15px;margin-left: 20px;margin-right: 20px;">
            <h5 class="card-header">Listado de Departamentos</h5>
            <div class="card-datatable">
                <table class="dt-column-search table table-bordered">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nombres</th>
                            <th>Descripcion</th>
                            <th>Localizacion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departamentos as $departamento)
                        <tr>
                            <th>{{$departamento -> departamentos_id}}</th>
                            <th>{{$departamento -> nombre}}</th>
                            <th>{{$departamento -> descripcion}}</th>
                            <th>{{$departamento -> Localizaciones_dptos}}</th>
                            <th>
                            <form action="{{ route('editarDepartamento',['id' => $departamento->departamentos_id]) }}" method="POST" class="form-horizontal" role="form" id="bootstrap">
                                    @method('POST')
                                    <button class="btn btn-success edit-button">Editar</button>
                                    </form>
                                    <br>
                                    <form action="{{ route('eliminarDepartamento', $departamento->departamentos_id) }}" method="POST">
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                            </th>
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