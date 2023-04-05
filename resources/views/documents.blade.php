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
        <a class="navbar-brand" href="">Documentos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <!-- Nav Item -->
            <li class="nav-item dropdown">
              <button title="Seleccionar Documentos" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Todos los Documentos
              </button>
              <ul class="dropdown-menu dropdown-menu">
                <li><a class="dropdown-item" href="#">Todos los documentos</a></li>
                <li><a class="dropdown-item" href="#">Acta</a></li>
                <li><a class="dropdown-item" href="#">Consignas</a></li>
                <li><a class="dropdown-item" href="#">Decreto</a></li>
                <li><a class="dropdown-item" href="#">Evaluacion</a></li>
                <li><a class="dropdown-item" href="#">Ficha Técnica</a></li>
                <li><a class="dropdown-item" href="#">Formato</a></li>
                <li><a class="dropdown-item" href="#">Guia</a></li>
                <li><a class="dropdown-item" href="#">Informe</a></li>
                <li><a class="dropdown-item" href="#">Instructivo</a></li>
                <li><a class="dropdown-item" href="#">Legal</a></li>
                <li><a class="dropdown-item" href="#">Leyes de la Nación</a></li>
                <li><a class="dropdown-item" href="#">Manual</a></li>
                <li><a class="dropdown-item" href="#">Matriz</a></li>
                <li><a class="dropdown-item" href="#">Obsoletos</a></li>
                <li><a class="dropdown-item" href="#">Perfil de Cargos</a></li>
                <li><a class="dropdown-item" href="#">Plan</a></li>
                <li><a class="dropdown-item" href="#">Politíca</a></li>
                <li><a class="dropdown-item" href="#">Procedimiento</a></li>
                <li><a class="dropdown-item" href="#">Programa</a></li>
                <li><a class="dropdown-item" href="#">Reglamento</a></li>
                <li><a class="dropdown-item" href="#">Resolución</a></li>

              </ul>
            </li>
            <!-- Nav Item -->
            <li class="nav-item dropdown">
              <button title="Seleccionar Procesos" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Todos los Procesos
              </button>
              <ul class="dropdown-menu dropdown-menu">
                <li><a class="dropdown-item" href="#">Todos los Procesos</a></li>
                <li><a class="dropdown-item" href="#">Asociación de Empresas Seguras</a></li>
                <li><a class="dropdown-item" href="#">Consultoria</a></li>
                <li><a class="dropdown-item" href="#">Diseño de Servicios</a></li>
                <li><a class="dropdown-item" href="#">Diseño de Software</a></li>
                <li><a class="dropdown-item" href="#">Formación</a></li>
                <li><a class="dropdown-item" href="#">Gestión Comercial</a></li>
                <li><a class="dropdown-item" href="#">Gestión de la Mejora</a></li>
                <li><a class="dropdown-item" href="#">Gestión de Proyectos</a></li>
                <li><a class="dropdown-item" href="#">Gestión del Conocimiento</a></li>
                <li><a class="dropdown-item" href="#">Gestión Financiera</a></li>
                <li><a class="dropdown-item" href="#">Outsourcing</a></li>
                <li><a class="dropdown-item" href="#">Planeación Estratégica</a></li>
                <li><a class="dropdown-item" href="#">Procesos de Prueba</a></li>
                <li><a class="dropdown-item" href="#">Seguridad Privada</a></li>
                <li><a class="dropdown-item" href="#">Servicio de Software Iso</a></li>

              </ul>
            </li>
          </ul>
        </div>
        <div class="">
          <a class="btn btn-primary" href="home" role="button" title="Listado Maestro">
            <i class="far fa-list-alt"></i>
          </a>
          <a class="btn btn-primary" href="home" role="button" title="Listado Registros">
            <i class="fas fa-book	"></i>
          </a>
          <a class="btn btn-primary" href="home" role="button" title="Control de Registros">
            <i class="fas fa-cash-register"></i>
          </a>
          <a class="btn btn-primary" href="home" role="button" title="Editar Documentos">
            <i class="fas fa-edit"></i>
          </a>
          <a class="btn btn-primary" href="home" role="button" title="Revisar Documentos">
            <i class="fa fa-street-view"></i>
          </a>
          <a class="btn btn-primary" href="home" role="button" title="Aprobar Documentos">
            <i class="fas fa-check-circle"></i>
          </a>
        </div>
      </div>

    </nav>
    <br />
              <!-- Responsive Datatable -->
              <div class="card">
                <h5 class="card-header">Responsive Datatable</h5>
                <div class="card-datatable table-responsive">
                  <table class="dt-responsive table table-bordered">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Post</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Age</th>
                        <th>Experience</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Post</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Age</th>
                        <th>Experience</th>
                        <th>Status</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!--/ Responsive Datatable -->
  </div>
  <!--/ Responsive Datatable -->
  

</div>

@endsection