<!DOCTYPE html>
<html>
<head>
    <title>Criar Aposta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #337ab7;
            color: #fff;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #337ab7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Criar Aposta</h1>

        <!-- Formulário de criação de aposta -->
        <form action="{{ route('apostas.store') }}" method="POST">
            @csrf
            <label for="jogo_id">Jogo</label>
            <select name="jogo_id" id="jogo_id" required>
                @foreach($jogos as $jogo)
                    <option value="{{ $jogo->id }}">{{ $jogo->time_casa }} x {{ $jogo->time_visitante }}</option>
                @endforeach
            </select>

            <label for="resultado">Resultado</label>
            <input type="text" id="resultado" name="resultado" required>

            <label for="valor">Valor</label>
            <input type="number" id="valor" name="valor" min="0" required>

            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
        @if(session('success'))
            <a href="{{route('apostas.resultado', ['aposta' => session('success')])}}" class="btn btn-primary">Ver Resultado</a>
        @endif
    </div>
</body>
</html>
