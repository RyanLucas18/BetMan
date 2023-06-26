<!DOCTYPE html>
<html>
<head>
  <title>Tela Principal - Site de Apostas</title>
  <style>
   
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .welcome-message {
      text-align: center;
      margin-bottom: 20px;
    }

    .game-list {
      list-style: none;
      padding: 0;
    }

    .game-item {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      background-color: #f9f9f9;
    }

    .game-item h3 {
      margin-top: 0;
    }

    .game-item p {
      margin-bottom: 0;
    }

    .create-game-link {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Tela Principal</h1>

    <div class="welcome-message">
      <p>Bem-vindo, Nome do Usuário!</p>
    </div>

    <h2>Jogos Disponíveis</h2>

    <ul class="game-list">
      <li class="game-item">
        <h3>Jogo 1</h3>
        <p>Descrição do jogo 1.</p>
        <p>Data: 01/07/2023</p>
        <p>Prêmio: R$ 1000</p>
      </li>
      <li class="game-item">
        <h3>Jogo 2</h3>
        <p>Descrição do jogo 2.</p>
        <p>Data: 05/07/2023</p>
        <p>Prêmio: R$ 500</p>
      </li>
      <!-- Adicione mais itens de jogo conforme necessário -->
    </ul>

    <a href="criar_jogo.php" class="create-game-link">Criar Novo Jogo</a>
  </div>
</body>
</html>







