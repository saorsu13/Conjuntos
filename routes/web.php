<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


//Ruta del Home
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

//Rutas de Cargos
Route::get('indexCargo',[App\Http\Controllers\CargoController::class,'index'])->name('indexCargo');
Route::get('crearCargo',[App\Http\Controllers\CargoController::class,'vistaCrearCargo'])->name('crearCargo');
Route::post('agregarCargo',[App\Http\Controllers\CargoController::class,'agregarCargo'])->name('agregarCargo');

//Rutas de Usuarios
Route::get('indexUsuario',[App\Http\Controllers\UsuarioController::class,'index'])->name('indexUsuario');
Route::get('crearUsuario',[App\Http\Controllers\UsuarioController::class,'vistaCrearUsuario'])->name('crearUsuario');
Route::post('agregarUsuario',[App\Http\Controllers\UsuarioController::class,'agregarUsuario'])->name('agregarUsuario');

//Ruta de Procesos
Route::get('indexProceso',[App\Http\Controllers\ProcesoController::class,'index'])->name('indexProceso');
Route::get('crearProceso',[App\Http\Controllers\ProcesoController::class,'vistaCrearProceso'])->name('crearProceso');
Route::post('agregarProceso',[App\Http\Controllers\ProcesoController::class,'agregarProceso'])->name('agregarProceso');

//Rutas de Documentos
// Route::get('document', [App\Http\Controllers\DocumentController::class, 'index'])->name('document');
// Route::get('documentList', [App\Http\Controllers\DocumentController::class,'listDocument'])->name('documentList');
// Route::get('documentCreate',[App\Http\Controllers\DocumentController::class, 'createDocument'])->name('documentCreate');
// Route::post('agregarDocumento',[App\Http\Controllers\DocumentController::class,'addDocument'])->name('agregarDocumento');
// Route::get('editDocument',[App\Http\Controllers\DocumentController::class,'editarDocumento'])->name('editDocument');;


//Rutas de Admin
// Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');


// Rutas inicio de sesion
// Route::get('/',[App\Http\Controllers\SecurityController::class,'index'])->name('login');
// Route::post('login',[App\Http\Controllers\SecurityController::class,'login'])->name('verifyLogin');
// Route::get('/logout', [\App\Http\Controllers\SecurityController::class,'logout'])->name('logout');
