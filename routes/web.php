<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\EsqueceuSenhaController;
use App\Http\Controllers\Auth\RedefinirSenhaController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\JogoController;
use App\Http\Controllers\ApostaController;

Route::get('/login', [LoginController::class, 'mostrarFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cadastro', [CadastroController::class, 'mostrarFormCadastro'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'cadastro']);


// USUARIOS
Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/{id}/editar', [UserController::class, 'mostrarFormEditar'])->name('user.editar');
Route::put('/usuarios/{id}', [UserController::class, 'atualizar'])->name('user.atualizar');
Route::delete('/usuarios/{id}/excluir', [UserController::class, 'excluir'])->name('user.excluir');

// Rotas para jogos
Route::get('/jogos', [JogoController::class, 'index'])->name('jogos.index');
Route::get('/jogos/create', [JogoController::class, 'create'])->name('jogos.create');
Route::post('/jogos', [JogoController::class, 'store'])->name('jogos.store');
Route::get('/jogos/{jogo}', [JogoController::class, 'show'])->name('jogos.show');
Route::get('/jogos/{jogo}/edit', [JogoController::class, 'edit'])->name('jogos.edit');
Route::put('/jogos/{jogo}', [JogoController::class, 'update'])->name('jogos.update');
Route::delete('/jogos/{jogo}', [JogoController::class, 'destroy'])->name('jogos.destroy');

// Rotas para apostas
Route::get('/apostas', [ApostaController::class, 'index'])->name('apostas.index');
Route::get('/apostas/create', [ApostaController::class, 'create'])->name('apostas.create');
Route::post('/apostas', [ApostaController::class, 'store'])->name('apostas.store');
Route::get('/apostas/{aposta}', [ApostaController::class, 'show'])->name('apostas.show');
Route::get('/apostas/{aposta}/edit', [ApostaController::class, 'edit'])->name('apostas.edit');
Route::put('/apostas/{aposta}', [ApostaController::class, 'update'])->name('apostas.update');
Route::delete('/apostas/{aposta}', [ApostaController::class, 'destroy'])->name('apostas.destroy');

Route::get('/jogos-disponiveis', [JogoController::class, 'jogosDisponiveis'])->name('jogos.disponiveis');

Route::get('/apostas/{aposta}/resultado', [ApostaController::class, 'resultado'])->name('apostas.resultado');
