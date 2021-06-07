<?php
// TERÁ Q ALTERAR CONFORME ESTÁ NO SEU BANCO:
// (Email_cli é como esta no MEU BANCO) e 
//(Senha_cli é como esta no MEU BANCO)
// (Cod_cli é como esta no MEU BANCO)

$_SG['conectaServidor'] = true;
$_SG['abreSessao'] = true;
$_SG['caseSensitive'] = false;
$_SG['validaSempre'] = true;
$_SG['servidor'] = 'localhost';
$_SG['usuario'] = 'root';
$_SG['senha'] = '211299';
$_SG['banco'] = 'tcc'; // Nome do BANCO
$_SG['paginaLogin'] = 'index.php'; // Página para onde será mandado a pessoa se nao logada!!
$_SG['tabela'] = 'cliente'; // Nome da Tabela

if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = @mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
}
if ($_SG['abreSessao'] == true)
  session_start();
function validaUsuario($usuario, $senha) {
  global $_SG;

  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  $sql = "SELECT `Cod_cli`, `Email_cli` FROM `".$_SG['tabela']."` WHERE ".$cS." `Email_cli` = '".$nusuario."' AND ".$cS." `Senha_cli` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
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
  global $_SG;

  if (!isset($_SESSION['Cod_cli']) OR !isset($_SESSION['Email_cli'])) {
    expulsaVisitante();
  } else if (!isset($_SESSION['Cod_cliD']) OR !isset($_SESSION['Email_cli'])) {
    if ($_SG['validaSempre'] == true) {
      if (!validaUsuario($_SESSION['Email_cli'], $_SESSION['Senha_cli'])) {
        expulsaVisitante();
      }
    }
  }
}
function expulsaVisitante() {
  global $_SG;
  unset($_SESSION['Cod_cli'], $_SESSION['Email_cli'], $_SESSION['Email_cli'], $_SESSION['Senha_cli']);
  header("Location: ".$_SG['']);
}
?>