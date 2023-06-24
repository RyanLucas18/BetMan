<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Exibe o formulário de login.
     *
     * @return \Illuminate\View\View
     */
    public function mostrarFormLogin()
    {
        return view('auth.login');
    }

    /**
     * Processa o formulário de login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('/')->with('success', 'Login realizado com sucesso.');
        }

        // Autenticação falhou
        return redirect()->back()->with('error', 'Credenciais inválidas. Verifique seu email e senha.');
    }

    /**
     * Faz logout do usuário.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Logout realizado com sucesso.');
    }
}
