<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        $tipoDocumentos = TipoDocumento::all();
        return view('TipoDocumento.index',compact('tipoDocumentos'));
    }
    public function vistaCrearTipoDocumento()
    {
        return view('TipoDocumento.crearTipoDocumento');
    }
    public function agregarTipoDocumento(Request $request)
    {
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento -> nombre = $request-> nombre;
        $tipoDocumento -> codigo_tipo_documento = $request -> codigoTipoDocumento;
		$tipoDocumento -> categoria = $request -> categoria;

        $tipoDocumento ->save();

        return redirect()->route('indexTipoDocumento');

    }
    public function editarTipoDocumento($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        return view('TipoDocumento.editarTipoDocumento', compact('tipoDocumento'));
    }
    public function actualizarTipoDocumento(Request $request, $id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento -> nombre = $request-> nombre;
        $tipoDocumento -> codigo_tipo_documento = $request -> codigoTipoDocumento;
		$tipoDocumento -> categoria = $request -> categoria;

        $tipoDocumento->save();
        return redirect()->route('indexTipoDocumento');
    }
    public function eliminarTipoDocumento($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        $tipoDocumento->delete();

        return redirect()->route('indexTipoDocumento')
            ->with('mensaje', 'La localización se ha eliminado correctamente.');
    }
}
