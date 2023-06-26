<!DOCTYPE html>
<html>
<head>
    <title>Jogos</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
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

        .btn-danger {
            background-color: #d9534f;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jogos</h1>

        <a href="{{ route('jogos.create') }}" class="btn btn-primary">Criar Jogo</a>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Time Casa</th>
                    <th>Time Visitante</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jogos as $jogo)
                    <tr>
                        <td>{{ $jogo->id }}</td>
                        <td>{{ $jogo->time_casa }}</td>
                        <td>{{ $jogo->time_visitante }}</td>
                        <td>{{ $jogo->data }}</td>
                        <td>
                            <a href="{{ route('jogos.edit', $jogo->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('jogos.destroy', $jogo->id) }}" method="POST" style="display: inline">
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
