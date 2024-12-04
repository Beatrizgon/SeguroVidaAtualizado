<?php
require 'db.php';
// require_once 'functions.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $senha = $_POST['senha'];




  // Busca o usuário pelo email
  $sql = "SELECT * FROM usuarios WHERE email = :email";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['email' => $email]);
  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);





  // Verifica se o usuário existe e se a senha está correta
  if ($usuario && password_verify($senha, $usuario['senha'])) {




    // Armazena os dados do usuário na sessão
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['plano'] = $usuario['plano'];

    // Redireciona para a página inicial
    header("Location: index.php");
    echo "Login bem-sucedido! Usuário: " . $_SESSION['nome'];
    exit();
  } else {
    // Se o login falhar, pode exibir uma mensagem de erro (opcional)
    $erro = "Email ou senha inválidos.";
    //echo $erro;
  }
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <title>CareUp - Login</title>
  <link rel="stylesheet" href="cadastro.css">
</head>

<body>
  <nav class="navbar col-12 position-fixed navbar-expand-lg navbar-light bg-light border border-grey"
    style="z-index: 999;">
    <div class="container-fluid">

      <div class="navbar-header">
        <figure>
          <a href="index.php">
            <img src="img/careup-removebg-preview.png" id="Logo">
          </a>
        </figure>
      </div>
      <ul class="nav navbar-nav">

        <!-- Dropdown Nossos Planos -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Seguros<span class="caret"></span></a>
          <ul class="dropdown-menu" style="min-width: 300px;">
            <div class="row">

              <div class="col-sm-6">
                <li><a href="segurobasico.php" class="dropdown-link">Seguro Básico</a></li>
                <li><a href="segurotop.php" class="dropdown-link">Seguro Top</a></li>
                <li><a href="seguropremium.php" class="dropdown-link">Seguro Premium</a></li>
              </div>

              <div class="col-sm-6">
                <li><a href="grupobasico.php" class="dropdown-link">Grupo Básico</a></li>
                <li><a href="grupotop.php" class="dropdown-link">Grupo Top</a></li>
                <li><a href="grupopremium.php" class="dropdown-link">Grupo Premium</a></li>
              </div>
            </div>
          </ul>
        </li>

        <ul class="nav navbar-nav">
          <!-- Dropdown Nossos Planos -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Planos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="planobasico.php">Plano Básico</a></li>
              <li><a href="planotop.php">Plano Top</a></li>
              <li><a href="planopremium.php">Plano Premium</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Sobre.php">Sobre a CareUp</a>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="">Ajuda<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="duvidas.php">Dúvidas</a></li>
              <li><a href="trabalheConosco.php">Trabalhe Conosco</a></li>
              <li><a href="redesSociais.php">Redes Sociais</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['nome'])): ?>
            <li style="margin-top: 25px; margin-left: 27em;"><span class="navbar-text">Olá, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</span></li>
            <li class="Log"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
          <?php else: ?>
            <li class="Cad" style=" margin-left: 27em;"><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Seja Cliente</a></li>
            <li class="Log"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
          <?php endif; ?>
        </ul>
    </div>
  </nav>


  <div class="container">
    <h1>Login</h1>

    <?php if (isset($erro)): ?>
      <p style="color: red;"><?= $erro; ?></p>
    <?php endif; ?>

    <form action="login.php" method="POST">
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="mail" id="email" name="email" class="form-control" placeholder="seuemail@exemplo.com" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Sua senha" required>
      </div>
      <a href="cadastro.php">Não possui cadastro? Realize já!</a><br><br>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
  </div>
</body>

</html>