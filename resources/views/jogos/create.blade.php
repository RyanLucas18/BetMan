<!DOCTYPE html>
<html>
<head>
    <title>Criar Jogo</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
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
        <h1>Criar Jogo</h1>

        <!-- Formulário de criação de jogo -->
        <form action="{{ route('jogos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="time_casa" class="form-label">Time Casa</label>
                <input type="text" class="form-control" id="time_casa" name="time_casa" required>
            </div>
            <div class="mb-3">
                <label for="time_visitante" class="form-label">Time Visitante</label>
                <input type="text" class="form-control" id="time_visitante" name="time_visitante" required>
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
</body>
</html>
