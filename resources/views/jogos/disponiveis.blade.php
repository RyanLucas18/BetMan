<!DOCTYPE html>
<html>
<head>
    <title>Jogos Disponíveis</title>
</head>
<body>
    <h1>Jogos Disponíveis</h1>
    <ul>
        @foreach($jogos as $jogo)
            <li>
                {{$jogo->time_casa}} vs {{$jogo->time_visitante}}
                <a href="{{route('apostas.create', ['jogo_id' => $jogo->id])}}">Realizar Aposta</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
