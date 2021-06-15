<!-- Aqui é o ph + chama dados etc.-->
<?php

$hostname = "localhost";
$bancodedados = "tcc";
$usuario = "root";
$senha = "";

$con = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if(mysqli_connect_errno()){
    printf("Falha na conexão com o banco de dados: %s\n", mysqli_connect_error());
    exit();
}
?> 