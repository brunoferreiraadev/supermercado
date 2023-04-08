<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '79917991';
$dbName = 'supermercado';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_errno) {
//     echo "Erro!👎";
// } else {
//     echo "Conexão efetuada com sucesso!👍";
// }

?>