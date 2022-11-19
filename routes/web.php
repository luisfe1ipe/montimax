<?php

use App\Http\Controllers\Admin\ProjetoController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::delete('projetos/{id}' , [ProjetoController::class, 'delete'])->name('projeto.delete');
Route::put('projetos/{id}', [ProjetoController::class, 'update'])->name('projeto.update');
Route::get('projetos/{id}/editar', [ProjetoController::class, 'edit'])->name('projeto.edit');
Route::get('/projetos', [ProjetoController::class, 'index'])->name('projeto.index');
Route::get('/projetos/criar', [ProjetoController::class, 'create'])->name('projeto.create');
Route::get('/projetos/{id}', [ProjetoController::class, 'show'])->name('projeto.show');
Route::post('/projetos/criar', [ProjetoController::class, 'store'])->name('projeto.store');



// Route::get('/inicio', function () {
//     return view('user.index');
// })->name('inicio');


// Route::get('/projetos', function () {
//     return view('user.projetos');
// })->name('projetos');


// Route::get('/contato', function () {
//     return view('user.contato');
// })->name('contato');

// Route::get('/ver-projeto', function () {
//     return view('user.visualizar-projeto');
// })->name('ver-projeto');

