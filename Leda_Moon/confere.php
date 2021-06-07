<?php include "conexao.php";// Nome do arquivo q faz a conexao com DB (No seu caso pode estar diferente);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $login = (isset($_POST['Email_cli'])) ? $_POST['Email_cli'] : ''; // (Email_cli é como esta no MEU BANCO)
  $senha = (isset($_POST['Senha_cli'])) ? $_POST['Senha_cli'] : ''; //(Senha_cli é como esta no MEU BANCO)
  if (validaUsuario($login, $senha) == true) {
    header("Location: index.php"); // Para onde a Pessoa será mandada ao logar
  } else {
    expulsaVisitante();
  }
}
?>