<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-login.php');

}
$logado = $_SESSION['email'];


if (isset($_POST['submit'])) {

    include_once('../config/config.php');

    // print_r($_POST['email']);
    // print_r($_POST['senha']);

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];


    $result = mysqli_query($conexao, "INSERT INTO acougue(nome,quantidade,valor)
    VALUES('$nome','$quantidade','$valor')");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/prod-acougue.css">
    <title>Açougue</title>
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
        <a class="voltar" href="produtos.php">Voltar</a>
        <a class="voltar" href="sair.php">Sair</a>

    </div>

    <div class="box">
        <form action="prod-acougue.php" method="post">
            <h2>Cadastrar produtos do açougue</h2><br><br>

            <div class="inputBox">
                <label for="nome" class="labelInput">Nome do produto
                </label>
                <input type="text" name="nome" id="nome" class="inputUser" required>

            </div><br>

            <div class="inputBox">
                <label for="nome" class="labelInput">Quantidade
                </label>
                <input type="text" name="quantidade" id="nome" class="inputUser" required>
            </div><br>

            <div class="inputBox">
                <label for="nome" class="labelInput">Valor
                </label>
                <input type="text" name="valor" id="nome" class="inputUser" required><br><br>

            </div><br>
            <input type="submit" name="submit" id="submit" class="submit" value="CADASTRAR">

        </form>
    </div>

    <!-- script loading -->
    <script src="../javascript/preloader.js"></script>
    <!-- script loading -->

</body>

</html>