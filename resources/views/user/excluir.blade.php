<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Excluir Usuário</h2>

        <p>Deseja realmente excluir o usuário "{{ $usuario->name }}"?</p>

        <form method="POST" action="{{ route('user.excluir', $usuario->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
</body>
</html>
