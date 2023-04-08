<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-login.php');

}
$logado = $_SESSION['email'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/produtos.css">
    <title>Produtos</title>
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
        <a class="voltar" href="tela-login.php">Voltar</a>
        <a class="voltar" href="sair.php">Sair</a>
    </div>
    <h1>Seções do Supermercado</h1>


    <div class="box">
        <div class="acougue">
            <a href="../pages/prod-acougue.php">

                <div class="link">
                    <h3>Açougue</h3>
                </div>
            </a>
        </div>

        <div class="limpeza">
            <a href="../pages/prod-limpeza.php">

                <div class="link">
                    <h3>Limpeza</h3>
                </div>
            </a>
        </div>
    </div>

    <!-- script loading -->
    <script src="../javascript/preloader.js"></script>
    <!-- script loading -->

</body>

</html>