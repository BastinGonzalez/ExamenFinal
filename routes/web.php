<?php

use App\Http\Livewire\Libros\CreateLibro;
use App\Http\Livewire\Libros\DeleteLibro;
use App\Http\Livewire\Libros\EditLibro;
use App\Http\Livewire\Libros\IndexLibros;
use App\Http\Livewire\Libros\ShowLibro;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasDelete;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', Login::class)->name("login");
Route::get('/login', Login::class)->name('login');
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");

Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");

Route::group(['middleware' => 'auth'], function () {
// RUTAS DE LIBROS
Route::get('/libros', IndexLibros::class)->name("indexLibros");
Route::get('/libros/create', CreateLibro::class)->name("createLibros");
Route::get('/libros/{libro}/edit', EditLibro::class)->name('editLibros');
Route::get('/libros/{libro}/show', ShowLibro::class)->name('showLibros');
Route::get('/libros/{libro}/delete', DeleteLibro::class)->name('deleteLibros');

//RUTAS DE USUARIOS
Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");
//Rutas de ventas
Route::get('/ventas',VentasIndex::class)->name('indexVentas');
Route::get('/ventas/create', VentasCreate::class)->name('createVentas');
Route::get('/ventas/{venta}/delete', VentasDelete::class)->name('deleteVentas');
});
