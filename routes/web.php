<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

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

Route::get('/', function () {
    return view('bem-vindo');
});

Auth::routes(['verify' => true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('tarefa/export/{extensao}', 'App\Http\Controllers\TarefaController@export')->name('tarefa.export');
Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');

Route::get('/mensagem-teste', function (){
    return new MensagemTesteMail();
    //Mail::to('udreakjogos2@gmail.com')->send(new MensagemTesteMail());
    //return 'email enviado com sucesso';
});
