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

//Rutas de Documentos
// Route::get('document', [App\Http\Controllers\DocumentController::class, 'index'])->name('document');
// Route::get('documentList', [App\Http\Controllers\DocumentController::class,'listDocument'])->name('documentList');
// Route::get('documentCreate',[App\Http\Controllers\DocumentController::class, 'createDocument'])->name('documentCreate');
// Route::post('agregarDocumento',[App\Http\Controllers\DocumentController::class,'addDocument'])->name('agregarDocumento');
// Route::get('editDocument',[App\Http\Controllers\DocumentController::class,'editarDocumento'])->name('editDocument');;

//Ruta de Procesos
// Route::get('process',[App\Http\Controllers\ProcessController::class,'index'])->name('process');
// Route::get('create',[App\Http\Controllers\ProcessController::class,'createProcess'])->name('processCreate');
// Route::post('agregarProceso',[App\Http\Controllers\ProcessController::class,'addProcess'])->name('agregarProceso');

//Rutas de Admin
// Route::get('usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');

//Rutas de Usuarios
// Route::get('indexUsuarios',[App\Http\Controllers\UsersController::class,'index'])->name('indexUsuarios');
// Route::get('createUsuarios',[App\Http\Controllers\UsersController::class,'createUsers'])->name('createUsuarios');
// Route::post('agregarUsuario',[App\Http\Controllers\UsersController::class,'addUsers'])->name('agregarUsuario');

//Rutas de Cargos
// Route::get('indexCargos',[App\Http\Controllers\PostController::class,'index'])->name('indexCargos');
// Route::get('createCargos',[App\Http\Controllers\PostController::class,'createPost'])->name('createCargos');
// Route::post('agregarCargo',[App\Http\Controllers\PostController::class,'addPost'])->name('agregarCargo');

//Ruta de Departamentos
// Route::get('indexDepartmentos',[App\Http\Controllers\DepartmentController::class,'index'])->name('indexDepartamentos');
// Route::get('createDepartment',[App\Http\Controllers\DepartmentController::class,'createDepartment'])->name('createDepartment');
// Route::post('agregarDepartamentos',[App\Http\Controllers\DepartmentController::class,'addDepartemnt'])->name('agregarDepartamentos');

// Rutas inicio de sesion
// Route::get('/',[App\Http\Controllers\SecurityController::class,'index'])->name('login');
// Route::post('login',[App\Http\Controllers\SecurityController::class,'login'])->name('verifyLogin');
// Route::get('/logout', [\App\Http\Controllers\SecurityController::class,'logout'])->name('logout');
