<?php
require 'db.php';
// Ativa exibição de erros (para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuração do banco de dados



$dsn = "mysql:host=localhost;dbname=careup_db;charset=utf8mb4";
$username = "root";
$password = "";
try {
    // Conexão com o banco de dados
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // Processa o formulário se o método for POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $datanasci = $_POST['datanasci'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $plano = $_POST['plano'];
        $senha = $_POST['senha'];

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Criptografia da senha
        echo $senha_hash;
        // Verifica se o e-mail já existe
        $sql = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email]);

        if ($stmt->fetchColumn() > 0) {
            // E-mail duplicado encontrado
            $mensagem = "<p class='alert alert-warning'>O e-mail informado já está cadastrado. Por favor, utilize outro.</p>";
        } else {
            // Insere os dados no banco usando placeholders nomeados
            $sql = "INSERT INTO usuarios (nome, datanasci, email, telefone, plano, senha) 
                    VALUES (:nome, :datanasci, :email, :telefone, :plano, :senha)";
            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                'nome' => $nome,
                'datanasci' => $datanasci,
                'email' => $email,
                'telefone' => $telefone,
                'plano' => $plano,
                'senha' => $senha_hash // Aqui especificamos o valor para a coluna senha
            ]);

            if ($stmt->rowCount() > 0) {
                $mensagem = "<p class='alert alert-success'>Cadastro realizado com sucesso!</p>";
                echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 1000); // Redireciona após 1 segundo
                    </script>";
            } else {
                $mensagem = "<p class='alert alert-danger'>Erro ao cadastrar. Por favor, tente novamente.</p>";
            }
        }
    }
} catch (PDOException $e) {
    echo "Erro na conexão ou execução: " . $e->getMessage();
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
    <title>CareUp - Cadastro</title>
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
        <h1>Cadastro de Usuário</h1>
        <?php if (!empty($mensagem)) echo $mensagem; ?>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="datanasci">Data de Nascimento:</label>
                <input type="date" id="datanasci" name="datanasci" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="seuemail@exemplo.com" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(XX) XXXXX-XXXX" required>
            </div>
            <div class="form-group">
                <label for="plano">Escolha o Plano:</label>
                <select id="plano" name="plano" class="form-control" required>
                    <option value="Básico">Plano Básico: CareUp Start</option>
                    <option value="Top">Plano Top: CareUp Active</option>
                    <option value="Premium">Plano Premium: CareUp Plus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Sua senha" required>
            </div>
            <a href="login.php">Já possui cadastro? Faça seu Login já!</a><br><br>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

</html>