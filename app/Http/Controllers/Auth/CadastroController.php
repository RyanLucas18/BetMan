<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CadastroController extends Controller
{
    /**
     * Exibe o formulário de cadastro.
     *
     * @return \Illuminate\View\View
     */
    public function mostrarFormCadastro()
    {
        return view('auth.cadastro');
    }

    /**
     * Processa o formulário de cadastro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function cadastro(Request $request)
    {
        // Validação dos campos do formulário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        // Criação do novo usuário
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Redirecionamento após o cadastro
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso. Faça o login para acessar sua conta.');
    }
}
