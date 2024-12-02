<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>CareUp - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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
        <li class="nav-item">
          <a class="nav-link" href="planos.php">Nossos Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicos.php">Serviços</a>
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
        <li class="Log"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
      </ul>
    </div>
  </nav>
  <div id="carouselExample" class="carousel slide" data-ride="carousel">
  <!-- Indicadores -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
  </ol>

  <!-- Slides -->
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

  <!-- Controles -->
  <a class="left carousel-control" href="#carouselExample" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carouselExample" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>


  <div class="container">
    <h2 style="text-align: center;">PLANOS</h2>
  </div><br><br>

  <div class="container text-center">
    <div class="row">
      <!-- Plano Básico -->
      <div class="col-sm-4">
        <div class="card" style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px;">
          <h4>Plano Básico</h4>
          <p><strong>CareUp Start</strong></p>
          <p>Mensalidade: <strong>A partir de R$ 14,90/mês</strong></p>
          <ul style="text-align: left;">
            <li>Telemedicina ilimitada</li>
            <li>Consultas presenciais: Até 3 por ano</li>
            <li>Exames básicos (5 por ano)</li>
            <li>Vacinas essenciais</li>
            <li>Saúde mental: 3 sessões online anuais</li>
            <li>Descontos em farmácias: Até 25%</li>
          </ul>
          <p><em>Indicado para jovens saudáveis que buscam prevenção.</em></p>
        </div>
      </div>

      <!-- Plano Top -->
      <div class="col-sm-4">
        <div class="card" style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px;">
          <h4>Plano Top</h4>
          <p><strong>CareUp Active</strong></p>
          <p>Mensalidade: <strong>A partir de R$ 24,90/mês</strong></p>
          <ul style="text-align: left;">
            <li>Tudo do plano básico</li>
            <li>Consultas presenciais ampliadas: Até 6 por ano</li>
            <li>Exames avançados</li>
            <li>Saúde mental: 4 sessões online anuais</li>
            <li>Odontologia básica</li>
            <li>Parcerias fitness: Descontos de até 40%</li>
            <li>Recompensas por check-ups</li>
          </ul>
          <p><em>Indicado para jovens que buscam um plano equilibrado.</em></p>
        </div>
      </div>

      <!-- Plano Premium -->
      <div class="col-sm-4">
        <div class="card" style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px;">
          <h4>Plano Premium</h4>
          <p><strong>CareUp Plus</strong></p>
          <p>Mensalidade: <strong>A partir de R$ 39,90/mês</strong></p>
          <ul style="text-align: left;">
            <li>Tudo do plano Top</li>
            <li>Consultas ilimitadas</li>
            <li>Exames completos</li>
            <li>Odontologia completa</li>
            <li>Atendimento emergencial</li>
            <li>Rede ampliada nacional</li>
            <li>Saúde mental premium: Até 10 sessões anuais</li>
            <li>Programa de bem-estar</li>
            <li>Cobertura de viagens</li>
          </ul>
          <p><em>Indicado para jovens que desejam uma cobertura completa.</em></p>
        </div>
      </div>
    </div>
  </div>


</body>

</html>