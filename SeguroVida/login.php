<?php

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
                <li class="nav-item">
                    <a class="nav-link" href="planos.php">Nossos Planos</a>
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
                <li class="Cad"><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Seja Cliente</a></li>
                <li class="Log"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
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