@extends('layouts.app')

@section('page-title', 'Iso One - Documentos')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css')}}" />
@section('page-content')

<div class="container-xxl flex-grow-1 container-p-y">

    <hr class="my-2" />

    <div class="card">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Dashboard -> Departamentos </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="">
                    <a class="btn btn-primary" href="{{ route('crearDocumento')}}" role="button" title="Vista Formato Web">
                        <i class="fas fa-puzzle-piece"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('indexDepartamento')}}" role="button" title="Vista Formato Impresion">
                        <i class="fa fa-refresh"></i>
                    </a>
                    <a class="btn btn-primary" href="{{ route('editarDocumentoHtml')}}" role="button" title="Salvar el Documento">
                        <i class="fas fa-cloud-download"></i>
                    </a>
                    <a class="btn btn-primary" href="home" role="button" title="Cerrar el Editor">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>
            </div>

        </nav>
        <div>
            <div class="col-12">
                <button class="btn  btn-primary" style="margin-top: 15px;margin-left: 20px;margin-right: 10px;" href="home" role="button" title="Listado Maestro">
                    Forzar Soporte
                </button>
                <button class="btn  btn-danger" style="margin-top: 15px;margin-right: 10px" href="home" role="button" title="Listado Maestro">
                    Forzar Publicacion
                </button>
                <button class="btn  btn-success" style="margin-top: 15px;margin-right: 10px" href="home" role="button" title="Listado Maestro">
                    Enviar a Editar
                </button>

                <!-- Full Editor -->
                <div class="col-12">
                    <div class="card" style="margin-top: 15px;">
                        <h5 class="card-header">Full Editor</h5>
                        <div class="card-body">
                            <div id="full-editor">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Full Editor -->


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
    @endsection

    @section('script-main')

    @endsection

    @section('script-page')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/forms-editors.js')}}"></script>

    @endsection