<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Documento;
use App\Models\Localizacion;
use App\Models\Proceso;
use App\Models\Requisito;
use App\Models\TipoDocumento;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documentos=Documento::all();
        return view('Documento.index',compact('documentos'));
    }
    public function indexDocumentoProcesar()
    {
        $documentos=Documento::all();
        return view('Documento.indexDocumentoProcesar',compact('documentos'));
    }
    public function editarDocumentoHtml()
    {
        return view('Documento.editarDocumentoHtml');
    }

    public function vistaCrearDocumento()
    {
        $usuarios = User::all();
        $localizaciones = Localizacion::all();
        $departamentos = Departamento::all();
        $procesos = Proceso::all();
        $requisitos = Requisito::all();
        $tipoDocumentos = TipoDocumento::all();
        return view('Documento.crearDocumento',compact('usuarios', 'localizaciones','departamentos','procesos','requisitos','tipoDocumentos'));
    }
    public function agregarDocumento(Request $request){
        $documento = new Documento(); 
		$documento->codigo=$request->codigo;
		$documento->nombre=$request->nombre;
		$documento->version=$request->version;
        $documento->responsable_editar_id=1;
        $documento->responsable_revisar_id=1;
		$documento->responsable_aprobar_id=2;
        $documento->etiqueta_id=2;
        $documento->descripcion=$request->descripcion;
        $documento->requisito_id=$request -> sistemaGestion;
        $documento->departamento_id= $request -> departamento;
        $documento->proceso_id=$request -> proceso;
        $documento->tipo_documento_id=$request -> tipoDocumento;
        $documento->localizacion_id=$request -> localizacion;

        $documento->save();
        return redirect()->route('indexDocumento');
        
    }
    // $phpWord = new \PhpOffice\PhpWord\PhpWord();
        // $section = $phpWord->addSection();
        // \PhpOffice\PhpWord\Shared\Html::addHtml($section, $request->descripcion);

        // header('Content-Type: application/octet-stream');
        // header('Content-Disposition: attachment;filename="test.docx"');

        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save('helloWorld.docx');

        // return response()->json([
        //     'status' => 200,
        //     'route' => route('indexDocumento')
        // ], 200);
    // public function editarDocumento()
    // {
    //     return view('Documents.edite-document');
    // }
}
