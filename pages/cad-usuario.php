<?php

if (isset($_POST['submit'])) {

    include_once('../config/config.php');

    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome,email,senha)
    VALUES('$nome','$email','$senha')");

    header('Location: tela-login.php');

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/cad-usuario.css">
    <title>Cadastro</title>
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
        <a class="voltar" href="tela-inicial.php">Voltar</a>
    </div>

    <div class="box">
        <form action="cad-usuario.php" method="post">
            <fieldset>
                <legend>Formulário de Usuários</legend>

                <div class="inputBox">
                    <input maxlength="60" type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo
                    </label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="password" class="labelInput">Senha</label>
                </div><br><br>
                <input type="submit" name="submit" id="submit" value="CADASTRAR">
            </fieldset>
        </form>
    </div>

    <!-- script loading -->
    <script src="../javascript/preloader.js"></script>
    <!-- script loading -->

</body>

</html>