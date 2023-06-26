<!DOCTYPE html>
<html>
<head>
    <title>Apostas</title>
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

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Apostas</h1>

        <a href="{{ route('apostas.create') }}" class="btn btn-primary">Criar Aposta</a>

        @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jogo</th>
                    <th>Resultado</th>
                    <th>Valor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apostas as $aposta)
                    <tr>
                        <td>{{ $aposta->id }}</td>
                        <td>{{ $aposta->jogo->time_casa }} x {{ $aposta->jogo->time_visitante }}</td>
                        <td>{{ $aposta->resultado }}</td>
                        <td>{{ $aposta->valor }}</td>
                        <td>
                            <a href="{{ route('apostas.edit', $aposta->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('apostas.destroy', $aposta->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
