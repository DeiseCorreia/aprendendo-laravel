<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;
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
//Route::view('/jogos','jogos');
/*Route::get('/jogos', function(){
    return "Laravel";
});retornando texto*/
/*Route::view('/jogos','jogos',['name'=>'GTA']);*/
/*Route::get('/jogos/{id?}/{name?}',function($id = null, $name = null){
    return view('jogos',['idJogo' => $id, 'nomeJogo'=> $name]);
})->where('id','[0-9]+','name','[A-Za-z]+'); //retornando o nome de jogos numa view*/
//->where('name','[A-Za-z]+')
/*Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/casa', function () {
    return view('welcome');
})->name('home-index');
Route::get('/perfil', function () {
    return view('perfil');
})->name('home-index');*/

//mesmo prefixo,ou seja mesmo nome nas rotas
Route::prefix('jogos')->group(function () {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});

Route::fallback(function () {
    return "Erro ao localizar a rota!";
});
