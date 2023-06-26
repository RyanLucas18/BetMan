<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class JogoController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('jogos.index', compact('jogos'));
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'time_casa' => 'required',
            'time_visitante' => 'required',
            'data' => 'required|date',
        ]);

        $resultado = Arr::random(['casa', 'visitante', 'empate']);

        Jogo::create([
            'time_casa' => $request->time_casa,
            'time_visitante' => $request->time_visitante,
            'data' => $request->data,
            'resultado' => $resultado,
        ]);

        return redirect()->route('jogos.index')->with('success', 'Jogo criado com sucesso!');
    }

    public function show(Jogo $jogo)
    {
        return view('jogos.show', compact('jogo'));
    }

    public function edit(Jogo $jogo)
    {
        return view('jogos.edit', compact('jogo'));
    }

    public function update(Request $request, Jogo $jogo)
    {
        $request->validate([
            'time_casa' => 'required',
            'time_visitante' => 'required',
            'data' => 'required|date',
        ]);

        $jogo->update([
            'time_casa' => $request->time_casa,
            'time_visitante' => $request->time_visitante,
            'data' => $request->data,
        ]);

        return redirect()->route('jogos.index')->with('success', 'Jogo atualizado com sucesso!');
    }

    public function destroy(Jogo $jogo)
    {
        $jogo->delete();

        return redirect()->route('jogos.index')->with('success', 'Jogo excluído com sucesso!');
    }

    public function jogosDisponiveis()
    {
        $jogos = Jogo::all();
        return view('jogos.disponiveis', compact('jogos'));
    }
}
