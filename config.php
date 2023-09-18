<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '123';
$dbName = 'formulario_validacao'; 

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) 
{
    echo "Erro";
} 

?>  