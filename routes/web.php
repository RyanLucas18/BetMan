<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\CadastroController;
use App\Http\Controllers\Auth\EsqueceuSenhaController;
use App\Http\Controllers\Auth\RedefinirSenhaController;

Route::get('/login', [LoginController::class, 'mostrarFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/cadastro', [CadastroController::class, 'mostrarFormCadastro'])->name('cadastro');
Route::post('/cadastro', [CadastroController::class, 'cadastro']);

Route::get('/senha/redefinir', [EsqueceuSenhaController::class, 'mostrarFormLinkRequest'])->name('senha.request');
Route::post('/senha/email', [EsqueceuSenhaController::class, 'enviarRedefinirLinkEmail'])->name('senha.email');
Route::get('/senha/redefinir/{token}', [RedefinirSenhaController::class, 'mostrarFormRedefinir'])->name('senha.redefinir');
Route::post('/senha/redefinir', [RedefinirSenhaController::class, 'redefinir'])->name('senha.update');


