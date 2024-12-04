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
  <title>CareUp - Sobre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="planotop.css">

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

  <section class="about" id="about">
    <div class="max-width">
      <h2 class="title">Plano Top</h2>
      <div class="about-content">
        <div class="about-content">
          <div class="column left">
            <img src="img/medico2.jpg" alt="">

          </div>
          <div class="column right">
            <p style="text-indent: 2em;">O Plano Top foi projetado para quem busca um equilíbrio entre prevenção e serviços de saúde mais amplos. Ideal para jovens que querem acesso a uma variedade maior de cuidados e benefícios adicionais, este plano oferece uma cobertura completa e recursos que vão além do básico.</p>
            <p style="text-indent: 2em;"><br>Mensalidade: A partir de R$ 24,90/mês.<br>Cobertura e Benefícios<br>Tudo do Plano Básico, mais:<br>- Consultas presenciais ampliadas: Até 6 por ano, incluindo atendimento com especialistas como ginecologistas, dermatologistas e ortopedistas.<br>- Exames avançados: Cobertura para exames de imagem simples, como raio-X e ultrassom.<br>- Saúde mental: 4 sessões de terapia online anuais para suporte emocional.<br>- Odontologia básica: Procedimentos como limpeza, obturação simples e orientação preventiva. <br>- Parcerias fitness: Economize até 40% em academias e aplicativos de nutrição e exercícios físicos. <br>- Recompensas: Descontos na mensalidade para quem realiza check-ups anuais e mantém a vacinação em dia. <br>Indicação
              Este plano é recomendado para jovens que desejam uma opção equilibrada, com maior acesso a atendimento presencial, cuidados especializados e benefícios extras que promovem um estilo de vida saudável.</p>
          </div>
        </div>
      </div>
  </section>
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