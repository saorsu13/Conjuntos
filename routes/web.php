<?php

use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\CasaController;
use App\Http\Controllers\EdificioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\PaqueaderoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\VehiculoController;
use Doctrine\DBAL\Driver\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Rutas inicio de sesion
Route::get('/',[App\Http\Controllers\SecurityController::class,'index'])->name('login');
Route::post('login',[App\Http\Controllers\SecurityController::class,'login'])->name('verifyLogin');
Route::get('/logout', [\App\Http\Controllers\SecurityController::class,'logout'])->name('logout');

//Ruta del Home
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('rol:webmaster')->name('home');

//Ruta de Localizaciones
Route::get('indexLocalizacion', [App\Http\Controllers\LocalizacionController::class, 'index'])->name('indexLocalizacion');
Route::get('crearLocalizacion',[App\Http\Controllers\LocalizacionController::class,'vistaCrearLocalizacion'])->name('crearLocalizacion');
Route::post('agregarLocalizacion',[App\Http\Controllers\LocalizacionController::class,'agregarLocalizacion'])->name('agregarLocalizacion');
Route::post('editarLocalizacion/{id}',[App\Http\Controllers\LocalizacionController::class,'editarLocalizacion'])->name('editarLocalizacion');
Route::put('actualizarLocalizacion/{id}',[\App\Http\Controllers\LocalizacionController::class,'actualizarLocalizacion'])->name('actualizarLocalizacion');
Route::delete('eliminarLocalizacion/{id}',[\App\Http\Controllers\LocalizacionController::class,'eliminarLocalizacion'])->name('eliminarLocalizacion');

//Ruta de Departamentos
Route::get('indexDepartamento',[App\Http\Controllers\DepartamentoController::class,'index'])->name('indexDepartamento');
Route::get('crearDepartamento',[App\Http\Controllers\DepartamentoController::class,'vistaCrearDepartamento'])->name('crearDepartamento');
Route::post('agregarDepartamento',[App\Http\Controllers\DepartamentoController::class,'agregarDepartamento'])->name('agregarDepartamento');
Route::post('editarDepartamento/{id}',[App\Http\Controllers\DepartamentoController::class,'editarDepartamento'])->name('editarDepartamento'); 
Route::put('actualizarDepartamento{id}',[App\Http\Controllers\DepartamentoController::class,'actualizarDepartamento'])->name('actualizarDepartamento');
Route::delete('eliminarDepartamento/{id}',[\App\Http\Controllers\DepartamentoController::class,'eliminarDepartamento'])->name('eliminarDepartamento');

//Rutas de Cargos
Route::get('indexCargo',[App\Http\Controllers\CargoController::class,'index'])->name('indexCargo');
Route::get('crearCargo',[App\Http\Controllers\CargoController::class,'vistaCrearCargo'])->name('crearCargo');
Route::post('agregarCargo',[App\Http\Controllers\CargoController::class,'agregarCargo'])->name('agregarCargo');
Route::post('editarCargo/{id}',[App\Http\Controllers\CargoController::class,'editarCargo'])->name('editarCargo');
Route::put('actualizarCargo/{id}',[App\Http\Controllers\CargoController::class,'actualizarCargo'])->name('actualizarCargo');
Route::delete('eliminarCargo/{id}',[App\Http\Controllers\CargoController::class,'eliminarCargo'])->name('eliminarCargo');

//Rutas de Usuarios
Route::get('indexUsuario',[App\Http\Controllers\UsuarioController::class,'index'])->name('indexUsuario');
Route::get('crearUsuario',[App\Http\Controllers\UsuarioController::class,'vistaCrearUsuario'])->name('crearUsuario');
Route::post('agregarUsuario',[App\Http\Controllers\UsuarioController::class,'agregarUsuario'])->name('agregarUsuario');
Route::post('editarUsuario/{id}',[App\Http\Controllers\UsuarioController::class,'editarUsuario'])->name('editarUsuario');
Route::put('actualizarUsuario/{id}',[App\Http\Controllers\UsuarioController::class,'actualizarUsuario'])->name('actualizarUsuario');
Route::delete('eliminarUsuario/{id}',[App\Http\Controllers\UsuarioController::class,'eliminarUsuario'])->name('eliminarUsuario');

//Ruta de Procesos
Route::get('indexProceso',[App\Http\Controllers\ProcesoController::class,'index'])->name('indexProceso');
Route::get('crearProceso',[App\Http\Controllers\ProcesoController::class,'vistaCrearProceso'])->name('crearProceso');
Route::post('agregarProceso',[App\Http\Controllers\ProcesoController::class,'agregarProceso'])->name('agregarProceso');
Route::post('editarProceso/{id}', [\App\Http\Controllers\ProcesoController::class, 'editarProceso'])->name('editarProceso');
Route::put('actualizarProceso/{id}',[App\Http\Controllers\ProcesoController::class,'actualizarProceso'])->name('actualizarProceso');
Route::delete('eliminarProceso/{id}',[App\Http\Controllers\ProcesoController::class,'eliminarProceso'])->name('eliminarProceso');

//Rutas de Requisitos
Route::get('indexRequisito', [App\Http\Controllers\RequisitoController::class,'index'])->name('indexRequisito');
Route::get('crearRequisito',[App\Http\Controllers\RequisitoController::class, 'vistaCrearRequisito'])->name('crearRequisito');
Route::post('agregarRequisito',[App\Http\Controllers\RequisitoController::class,'agregarRequisito'])->name('agregarRequisito');
Route::post('editarRequisito/{id}',[App\Http\Controllers\RequisitoController::class,'editarRequisito'])->name('editarRequisito');
Route::put('actualizarRequisito/{id}',[App\Http\Controllers\RequisitoController::class,'actualizarRequisito'])->name('actualizarRequisito');
Route::delete('eliminarRequisito/{id}',[App\Http\Controllers\RequisitoController::class,'eliminarRequisito'])->name('eliminarRequisito');

//Rutas de Documentos
Route::get('indexDocumento', [App\Http\Controllers\DocumentoController::class, 'index'])->name('indexDocumento');
Route::get('indexDocumentoProcesar',[App\Http\Controllers\DocumentoController::class,'indexDocumentoProcesar'])->name('indexDocumentoProcesar');
Route::get('crearDocumento',[App\Http\Controllers\DocumentoController::class, 'vistaCrearDocumento'])->name('crearDocumento');
Route::get('editarDocumentoHtml',[App\Http\Controllers\DocumentoController::class,'editarDocumentoHtml'])->name('editarDocumentoHtml');
Route::post('agregarDocumento',[App\Http\Controllers\DocumentoController::class,'agregarDocumento'])->name('agregarDocumento');
Route::post('editarDocumento',[App\Http\Controllers\DocumentoController::class,'editarDocumento'])->name('editarDocumento');
Route::put('actualizarDocumento',[App\Http\Controllers\DocumentoController::class,'actualizarDocumento'])->name('actualizarDocumento');
Route::delete('eliminarDocumento',[App\Http\Controllers\DocumentoController::class,'eliminarDocumento'])->name('eliminarDocumento');

//Rutas de Tipo Documentos
Route::get('indexTipoDocumento',[App\Http\Controllers\TipoDocumentoController::class,'index'])->name('indexTipoDocumento');
Route::get('crearTipoDocumento',[App\Http\Controllers\TipoDocumentoController::class,'vistaCrearTipoDocumento'])->name('crearTipoDocumento');
Route::post('agregarTipoDocumento',[App\Http\Controllers\TipoDocumentoController::class,'agregarTipoDocumento'])->name('agregarTipoDocumento');
Route::post('editarTipoDocumento/{id}',[App\Http\Controllers\TipoDocumentoController::class,'editarTipoDocumento'])->name('editarTipoDocumento');
Route::put('actualizarTipoDocumento/{id}',[App\Http\Controllers\TipoDocumentoController::class,'actualizarTipoDocumento'])->name('actualizarTipoDocumento');
Route::delete('eliminarTipoDocumento/{id}',[App\Http\Controllers\TipoDocumentoController::class,'eliminarTipoDocumento'])->name('eliminarTipoDocumento');

// Rutas para el controlador ApartamentoController
Route::get('indexApartamento', [ApartamentoController::class, 'index'])->name('indexApartamento');
Route::get('crearApartamento', [ApartamentoController::class, 'vistaCrearApartamento'])->name('crearApartamento');
Route::post('agregarApartamento', [ApartamentoController::class, 'agregarApartamento'])->name('agregarApartamento');
Route::get('editarApartamento/{id}', [ApartamentoController::class, 'editarApartamento'])->name('editarApartamento');
Route::put('actualizarApartamento/{id}', [ApartamentoController::class, 'actualizarApartamento'])->name('actualizarApartamento');
Route::delete('eliminarApartamento/{id}', [ApartamentoController::class, 'eliminarApartamento'])->name('eliminarApartamento');

// Rutas para el controlador CasaController
Route::get('indexCasa', [CasaController::class, 'index'])->name('indexCasa');
Route::get('crearCasa', [CasaController::class, 'vistaCrearCasa'])->name('crearCasa');
Route::post('agregarCasa', [CasaController::class, 'agregarCasa'])->name('agregarCasa');
Route::get('editarCasa/{id}', [CasaController::class, 'editarCasa'])->name('editarCasa');
Route::put('actualizarCasa/{id}', [CasaController::class, 'actualizarCasa'])->name('actualizarCasa');
Route::delete('eliminarCasa/{id}', [CasaController::class, 'eliminarCasa'])->name('eliminarCasa');

// Rutas para el controlador EdificioController
Route::get('indexEdificio', [EdificioController::class, 'index'])->name('indexEdificio');
Route::get('crearEdificio', [EdificioController::class, 'vistaCrearEdificio'])->name('crearEdificio');
Route::post('agregarEdificio', [EdificioController::class, 'agregarEdificio'])->name('agregarEdificio');
Route::get('editarEdificio/{id}', [EdificioController::class, 'editarEdificio'])->name('editarEdificio');
Route::put('actualizarEdificio/{id}', [EdificioController::class, 'actualizarEdificio'])->name('actualizarEdificio');
Route::delete('eliminarEdificio/{id}', [EdificioController::class, 'eliminarEdificio'])->name('eliminarEdificio');

// Rutas para el controlador MascotaController
Route::get('indexMascota', [MascotaController::class, 'index'])->name('indexMascota');
Route::get('crearMascota', [MascotaController::class, 'vistaCrearMascota'])->name('crearMascota');
Route::post('agregarMascota', [MascotaController::class, 'agregarMascota'])->name('agregarMascota');
Route::get('editarMascota/{id}', [MascotaController::class, 'editarMascota'])->name('editarMascota');
Route::put('actualizarMascota/{id}', [MascotaController::class, 'actualizarMascota'])->name('actualizarMascota');
Route::delete('eliminarMascota/{id}', [MascotaController::class, 'eliminarMascota'])->name('eliminarMascota');

// Rutas para el controlador PersonaController
Route::get('indexPersona', [PersonaController::class, 'index'])->name('indexPersona');
Route::get('crearPersona', [PersonaController::class, 'vistaCrearPersona'])->name('crearPersona');
Route::post('agregarPersona', [PersonaController::class, 'agregarPersona'])->name('agregarPersona');
Route::get('editarPersona/{id}', [PersonaController::class, 'editarPersona'])->name('editarPersona');
Route::put('actualizarPersona/{id}', [PersonaController::class, 'actualizarPersona'])->name('actualizarPersona');
Route::delete('eliminarPersona/{id}', [PersonaController::class, 'eliminarPersona'])->name('eliminarPersona');

// Rutas para el controlador PaqueaderoController
Route::get('indexPaqueadero', [PaqueaderoController::class, 'index'])->name('indexPaqueadero');
Route::get('crearPaqueadero', [PaqueaderoController::class, 'vistaCrearPaqueadero'])->name('crearPaqueadero');
Route::post('agregarPaqueadero', [PaqueaderoController::class, 'agregarPaqueadero'])->name('agregarPaqueadero');
Route::get('editarPaqueadero/{id}', [PaqueaderoController::class, 'editarPaqueadero'])->name('editarPaqueadero');
Route::put('actualizarPaqueadero/{id}', [PaqueaderoController::class, 'actualizarPaqueadero'])->name('actualizarPaqueadero');
Route::delete('eliminarPaqueadero/{id}', [PaqueaderoController::class, 'eliminarPaqueadero'])->name('eliminarPaqueadero');

// Rutas para el controlador VehiculoController
Route::get('indexVehiculo', [VehiculoController::class, 'index'])->name('indexVehiculo');
Route::get('crearVehiculo', [VehiculoController::class, 'vistaCrearVehiculo'])->name('crearVehiculo');
Route::post('agregarVehiculo', [VehiculoController::class, 'agregarVehiculo'])->name('agregarVehiculo');
Route::get('editarVehiculo/{id}', [VehiculoController::class, 'editarVehiculo'])->name('editarVehiculo');
Route::put('actualizarVehiculo/{id}', [VehiculoController::class, 'actualizarVehiculo'])->name('actualizarVehiculo');
Route::delete('eliminarVehiculo/{id}', [VehiculoController::class, 'eliminarVehiculo'])->name('eliminarVehiculo');

