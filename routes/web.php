<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyInvitationsController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/{id}', [HomeController::class, 'index'])->name('index');
Route::post('/', [HomeController::class, 'cadastrar'])->name('form_submit');
Route::get('/sucesso', [HomeController::class, 'success'])->name('success');

// Rotas para o painel de acompanhamento
Route::prefix('meusConvites')->group(function (){

    Route::get('entrar/', [MyInvitationsController::class, 'index'])->name('access_panel');
    Route::get('lista', [MyInvitationsController::class, 'my_invitations'])->name('panel');
});