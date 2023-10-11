<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbSenha = '';
$dbNome = 'teste_banco';


$conexao = mysqli_connect($dbHost, $dbUsername, $dbSenha, $dbNome);


if($conexao->connect_error){
    echo "Status: Erro de conexão ao DB";
}

else{
    // echo "Status: Conectado ao DB";
}