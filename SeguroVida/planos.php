<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>CareUp - Planos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <li class="Log"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <h2 style="text-align: center; font-weight:300;"><strong>PLANOS</strong></h2>
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
          <a href="cadastro.php"> 
            <input type="button" value="Assinar">
          </a>
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
          <a href="cadastro.php"> 
            <input type="button" value="Assinar">
          </a>
         
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
          <a href="cadastro.php"> 
            <input type="button" value="Assinar">
          </a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br>


  <footer class="page-footer font-small blue p-5" style="background-color: rgb(16, 50, 161); color: white;">
    <div class="text-center">
      <div class="container">
        <h2 id="contatos">Contatos</h2>
        <p>Nos siga nas redes sociais e fique por dentro das novidades</p>

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
        </div>

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
    </div>
  </footer>


</body>

</html>