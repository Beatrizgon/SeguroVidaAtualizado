<?php
// Ativa exibição de erros (para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuração do banco de dados
$servername = "localhost"; // Altere para seu servidor
$username = "root";
$password = "";
$dbname = "careup_db";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Variável para armazenar mensagens de feedback ao usuário
$mensagem = "";

// Processa o formulário se o método for POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $datanasci = $_POST['datanasci'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $plano = $_POST['plano'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Verifica se o e-mail já existe
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // E-mail duplicado encontrado
        $mensagem = "<p class='alert alert-warning'>O e-mail informado já está cadastrado. Por favor, utilize outro.</p>";
    } else {
        // Insere os dados no banco
        $sql = "INSERT INTO usuarios (nome, datanasci, email, telefone, plano, senha) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nome, $datanasci, $email, $telefone, $plano, $senha);

        if ($stmt->execute()) {
            $mensagem = "<p class='alert alert-success'>Cadastro realizado com sucesso!</p>";
        } else {
            $mensagem = "<p class='alert alert-danger'>Erro ao cadastrar o usuário: " . $stmt->error . "</p>";
        }
    }
    $stmt->close();
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Nossos Planos<span class="caret"></span></a>
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
                <li class="Cad"><a href="cadastro.php"><span class="glyphicon glyphicon-user"></span> Seja Cliente</a></li>
                <li class="Log"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
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