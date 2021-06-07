<?php
include "conexao.php"; // Nome do arquivo q faz a conexao com DB (No seu caso pode estar diferente);
require_once("seguranca.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Email_cli = (isset($_POST['Email_cli'])) ? $_POST['Email_cli'] : ''; // (Email_cli é como esta no MEU BANCO)
  $Senha_cli = (isset($_POST['Senha_cli'])) ? $_POST['Senha_cli'] : ''; //(Senha_cli é como esta no MEU BANCO)
  if (validaUsuario($Email_cli, $Senha_cli) == true) {
    header('Location: index.php'); // Para onde a Pessoa será mandada ao logar
  } else {
    expulsaVisitante();
  } 
}
?>