<?php

require 'db.php';

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>CareUp: Seguro de Vida, Saúde Desde Cedo | CareUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">

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
  <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExample" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="img/slide2.png" alt="Slide 1" class="d-block w-100">
      </div>
      <div class="item">
        <img src="img/slide1.png" alt="Slide 2" class="d-block w-100">
        <div class="carousel-caption">

        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#carouselExample" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#carouselExample" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>

  <div class="container" id="planos"><br><br><br><br>
    <h1 class="titulo" style="text-align: center; font-weight:400;">PLANOS DE SAÚDE</h1>
  </div><br><br>

  <div class="container text-center">
    <div class="row">
      <a href="planobasico.php">
        <div class="col-sm-4">
          <div class="card1">
            <div style="position: absolute; bottom: 10px; left: 10px; right: 10px; background: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">
              <h4>Plano de Sáude</h4>
              <p><strong>CareUp Start</strong></p>
              <p>Prático e Econômico</p>
            </div>
          </div>
        </div>
      </a>

      <a href="planotop.php">
        <div class="col-sm-4">
          <div class="card2">
            <div style="position: absolute; bottom: 10px; left: 10px; right: 10px; background: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">
              <h4>Plano de Sáude</h4>
              <p><strong>CareUp Active</strong></p>
              <p>Odontologia</p>
            </div>
          </div>
        </div>
      </a>

      <a href="planopremium.php">
        <div class="col-sm-4">
          <div class="card3">
            <div style="position: absolute; bottom: 10px; left: 10px; right: 10px; background: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">

              <h4>Plano de Sáude</h4>
              <p><strong>CareUp Plus</strong></p>
              <p>Viagens</p>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="container" id="planos"><br><br><br><br>
    <h1 class="titulo" style="text-align: center; font-weight:400;">SEGUROS</h1>
  </div><br><br>

  <div class="container text-center">
    <div class="row">

      <div class="col-sm-6">
        <div class="card4" data-toggle="modal" data-target="#seguroIndividualModal">
          <div style="position: absolute; bottom: 10px; left: 10px; right: 10px; background: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">
            <h4>Seguro</h4>
            <p><strong>Individual</strong></p>
            <p>Para jovens que desejam segurança e tranquilidade</p>
          </div>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="card5" data-toggle="modal" data-target="#seguroGrupoModal">
          <div style="position: absolute; bottom: 10px; left: 10px; right: 10px; background: rgba(0, 0, 0, 0.6); padding: 10px; border-radius: 5px;">
            <h4>Seguro</h4>
            <p><strong>Grupo</strong></p>
            <p>Para pequenos grupos, como amigos ou familiares</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para Seguro Individual -->
  <div class="modal fade" id="seguroIndividualModal" tabindex="-1" role="dialog" aria-labelledby="seguroIndividualModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="seguroIndividualModalLabel">Escolha seu Seguro Individual</h4>
        </div>
        <div class="modal-body">
          <p>Escolha o plano de seguro que deseja saber mais:</p>
          <ul>
            <li><a href="segurobasico.php" class="btn btn-primary w-100">Seguro Básico</a></li><br>
            <li><a href="segurotop.php" class="btn btn-primary w-100 mt-2">Seguro Top</a></li><br>
            <li><a href="seguropremium.php" class="btn btn-primary w-100 mt-2">Seguro Premium</a></li><br>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal para Seguro de Grupo -->
  <div class="modal fade" id="seguroGrupoModal" tabindex="-1" role="dialog" aria-labelledby="seguroGrupoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="seguroGrupoModalLabel">Escolha seu Seguro de Grupo</h4>
        </div>
        <div class="modal-body">
          <p>Escolha o plano de seguro que deseja saber mais:</p>
          <ul>
            <li><a href="Grupobasico.php" class="btn btn-primary w-100">Grupo Básico</a></li><br>
            <li><a href="Grupotop.php" class="btn btn-primary w-100 mt-2">Grupo Top</a></li><br>
            <li><a href="Grupopremium.php" class="btn btn-primary w-100 mt-2">Grupo Premium</a></li><br>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br><br>


  <footer class="page-footer font-small blue p-5" style="background-color: rgb(16, 50, 161); color: white;">
    <div class="text-center">
      <div class="container">
        <h2 id="contatos">Contatos</h2><br>
        <p>Nos siga nas redes sociais e fique por dentro das novidades</p><br>

        <div class="social-icons">
          <a href="https://twitter.com/" target="_blank">
            <i class="fab fa-twitter" style="color: white; font-size: 24px; margin-right: 15px;"></i>
          </a>
          <a href="https://www.facebook.com/" target="_blank">
            <i class="fab fa-facebook-f" style="color: white; font-size: 24px; margin-right: 15px;"></i>
          </a>
          <a href="https://www.instagram.com/" target="_blank">
            <i class="fab fa-instagram" style="color: white; font-size: 24px; margin-right: 15px;"></i>
          </a>
          <a href="https://br.pinterest.com/" target="_blank">
            <i class="fab fa-pinterest" style="color: white; font-size: 24px; margin-right: 15px;"></i>
          </a>
        </div><br><br>

        <div class="copyright">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="copy-text text-center">
                  <p>&copy; <a href="index.php" style="color: white;">CareUp</a> - Todos os Direitos Reservados.</p>
                </div>
              </div>
            </div>
          </div>
        </div><br>

        <div class="copyright">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="copy-text text-center">
                  <p style="color: rgba(255, 255, 255, 0.765);">Projeto Back-End 2024.2</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

  </footer>

</body>

</html>