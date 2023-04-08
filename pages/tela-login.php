<?php

if (isset($_POST['submit'])) {

    include_once('../config/config.php');

    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro(email,senha)
    VALUES('$email','$senha')");

    header('Location: produtos.php');

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/tela-login.css">
    <title>Login</title>
</head>

<body>
    <!-- loading -->
    <div id="preloader">
        <div class="car">
            <p class="par">Carregando...</p>
        </div>
    </div>
    <!-- loading -->


    <div class="center">
        <a class="login" href="tela-inicial.php">Voltar</a>
        <a class="login" href="sair.php">Sair</a>
        <a class="login" href="produtos.php">Produtos</a>

    </div>
    <form action="testLogin.php" method="post">
        <div class="usuario">
            <h1>Login</h1><br>
            <input id="email" name="email" class="dados" type="text" placeholder="E-mail" required>
            <br><br>
            <input id="senha" name="senha" class="dados" type="password" placeholder="Senha" required>
            <br><br><br>
            <input type="submit" name="submit" id="submit" value="ENVIAR" class="botao">
        </div>
    </form>

    <!-- script loading -->
    <script src="../javascript/preloader.js"></script>
    <!-- script loading -->

</body>

</html>