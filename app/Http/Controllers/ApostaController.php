<?php

namespace App\Http\Controllers;

use App\Models\Aposta;
use App\Models\Jogo;
use Illuminate\Http\Request;

class ApostaController extends Controller
{
    public function index()
    {
        $apostas = Aposta::all();
        return view('apostas.index', compact('apostas'));
    }

    public function create()
    {
        $jogos = Jogo::all();
        return view('apostas.create', compact('jogos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jogo_id' => 'required',
            'resultado' => 'required',
            'valor' => 'required|numeric|min:0',
        ]);

        Aposta::create([
            'jogo_id' => $request->jogo_id,
            'resultado' => $request->resultado,
            'valor' => $request->valor,
        ]);

        return redirect()->route('apostas.index')->with('success', 'Aposta criada com sucesso!');
    }

    public function show(Aposta $aposta)
    {
        return view('apostas.show', compact('aposta'));
    }

    public function edit(Aposta $aposta)
    {
        $jogos = Jogo::all();
        return view('apostas.edit', compact('aposta', 'jogos'));
    }

    public function update(Request $request, Aposta $aposta)
    {
        $request->validate([
            'jogo_id' => 'required',
            'resultado' => 'required',
            'valor' => 'required|numeric|min:0',
        ]);

        $aposta->update([
            'jogo_id' => $request->jogo_id,
            'resultado' => $request->resultado,
            'valor' => $request->valor,
        ]);

        return redirect()->route('apostas.index')->with('success', 'Aposta atualizada com sucesso!');
    }

    public function destroy(Aposta $aposta)
    {
        $aposta->delete();

        return redirect()->route('apostas.index')->with('success', 'Aposta excluída com sucesso!');
    }

    public function resultado(Aposta $aposta)
    {
        // Gere o resultado aleatório
        $resultado = rand(0, 1) === 0 ? 'Perdeu' : 'Ganhou';
        $premio = rand(1000, 10000);

        return view('apostas.resultado', compact('aposta', 'resultado', 'premio'));
    }
}
