<!DOCTYPE html>
<html>
<head>
    <title>Editar Aposta</title>
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
        <h1>Editar Aposta</h1>

        <!-- Formulário de edição de aposta -->
        <form action="{{ route('apostas.update', $aposta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="jogo_id">Jogo</label>
            <select name="jogo_id" id="jogo_id" required>
                <option value="">Selecione o jogo</option>
                @foreach($jogos as $jogo)
                    <option value="{{ $jogo->id }}" {{ $jogo->id === $aposta->jogo_id ? 'selected' : '' }}>
                        {{ $jogo->time_casa }} x {{ $jogo->time_visitante }}
                    </option>
                @endforeach
            </select>

            <label for="gols_time_casa">Gols do Time da Casa</label>
            <input type="number" id="gols_time_casa" name="gols_time_casa" min="0" required value="{{ $aposta->gols_time_casa }}">

            <label for="gols_time_visitante">Gols do Time Visitante</label>
            <input type="number" id="gols_time_visitante" name="gols_time_visitante" min="0" required value="{{ $aposta->gols_time_visitante }}">

            <label for="valor">Valor da Aposta</label>
            <input type="number" id="valor" name="valor" min="0" step="0.01" required value="{{ $aposta->valor }}">

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>
