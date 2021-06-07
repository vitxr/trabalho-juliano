<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$Email_cli = $_POST['Email_cli'];
$Senha_cli = $_POST['Senha_cli'];
// A variavel $result pega as varias $Email_cli e $Senha_cli, faz uma pesquisa na tabela de usuarios(ou qual tabela estiver no seu banco)
$result = mysql_query("SELECT * FROM `cliente` WHERE `Email_cli` = '$Email_cli' AND `Senha_cli`= '$Senha_cli'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['Email_cli'] = $Email_cli;
$_SESSION['Senha_cli'] = $Senha_cli;
header('location: index.php');
}
else{
	unset ($_SESSION['Email_cli']);
	unset ($_SESSION['Senha_cli']);
	header('location: cadastro2.php');
	
	}

?>