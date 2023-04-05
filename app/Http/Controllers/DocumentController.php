<?php

namespace App\Http\Controllers;

use App\Models\Documento;
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
        return view('document');
    }

    // public function listDocument()
    // {
    //     $documents= Documento::all();

    //     return view('Documento.document-list',compact('documento'));
    // }
    // public function createDocument()
    // {
    //     return view('Documents.create-document');
    // }
    // public function addDocument(Request $request){
    //     $document = new Document(); 
    //     $document->system_id=$request->sistemaGestion;
	// 	$document->process_id=$request->proceso;
	// 	$document->document_type_id=$request->tipoDocumento;
	// 	$document->location_id=$request->localizacion;
	// 	$document->code=$request->codigo;
	// 	$document->name=$request->nombre;
	// 	$document->version=$request->version;
    //     $document->position_edit_id=1;
    //     $document->position_review_id=1;
	// 	$document->position_approve_id=2;


    //     $document->save();

    //     return redirect()->route('document');
    // }
    // public function editarDocumento()
    // {
    //     return view('Documents.edite-document');
    // }
}
