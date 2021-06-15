<?php
// TERÁ Q ALTERAR CONFORME ESTÁ NO SEU BANCO:
// (Email_cli é como esta no MEU BANCO) e 
//(Senha_cli é como esta no MEU BANCO)
// (Cod_cli é como esta no MEU BANCO)

include "conexao.php";


function validaUsuario($usuario, $senha) {
  
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  $sql = "SELECT `Cod_cli`, `Email_cli` FROM `".$_SG['tabela']."` WHERE ".$cS." `Email_cli` = '".$nusuario."' AND `Senha_cli` = '".$nsenha."' LIMIT 1";
  $query = mysqli_query($sql);
  $resultado = mysql_fetch_assoc($query);
  if (empty($resultado)) {
    return false;
  } else {
    $_SESSION['Cod_cli'] = $resultado['Cod_cli'];
    $_SESSION['Email_cli'] = $resultado['Email_cli'];
    if ($_SG['validaSempre'] == true) {
      $_SESSION['Email_cli'] = $Email_cli;
      $_SESSION['Senha_cli'] = $Senha_cli;
    }

    return true;
  }
}
function protegePagina() {
  
  if (!isset($_SESSION['Cod_cli']) OR !isset($_SESSION['Email_cli'])) {
    expulsaVisitante();
  } else if (!isset($_SESSION['Cod_cliD']) OR !isset($_SESSION['Email_cli'])) {
    
     if (!validaUsuario($_SESSION['Email_cli'], $_SESSION['Senha_cli'])) {
       expulsaVisitante();
     }
    
  }
}
function expulsaVisitante() {
  unset($_SESSION['Cod_cli'], $_SESSION['Email_cli'], $_SESSION['Email_cli'], $_SESSION['Senha_cli']);
  header("Location: cadastro2.php");
}
?>