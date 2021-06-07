<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />
<?php
/*
Cod_pro, Valor_pro , Descr_pro , Fabri_pro , Genero_pro , Foto_pro , Nome_pro
*/
session_start();
//Instanciar a pagina do carrinho
$pagina = 'carrinho.php';
//INCICIAR a class

class shopping{
	
	private $banco = 'tcc';
	private $senha = '';
	private $login = 'root';
	private $hostname = 'localhost';
	
	//conexão com banco
	function conexao(){
	mysql_connect($this->hostname, $this->login, $this->senha or die("Não foi possivel conectar
	ao banco".mysql_error());
	mysql_select_db($this->banco) or die ("Não foi possivel selecionar o 
	Banco".mysql_error());
	
	//para acentuação
	mysql_query("SET NAME 'uft8'");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_client=uft8");
	mysql_query("SET character_set_results=uft8");
	
	}
	//instanciar o carrinho de com pras
	function carrinho(){
		//verifica se existe uma session
		if($SESSION){
			//separar nome de quantidade de valores isso é produtos no carrinho
			foreach($_SESSION as $nome => $quantidade){
				if(substr($nome,0,9)== 'produtos'){
				//pegar id da session
				$id = substr($nome,9,(strlen($nome) -9));
				//montar o carrinho 
$PD = mysql_query("SELECT Nome_pro , Valor_pro , Cod_pro FROM produtos WHERE Cod_pro=".mysql_real_escape_string((int)Cod_pro);
			while($list = mysql_fetch_assoc($PD)){
				$subTotal = $quantidade * $list['Valor_pro'];
echo 'Nome'.list['produto'].''.$list.$quantidade.'x R$'.number_format($list['Valor_pro'], 2).'= R$'.number_format($subTotal, 2);
				
			}
				}
			}
		}else{
			echo 'Sem session';
		}
	}
	
	
	//fim class
}
//add do carinho de compras na descrição
if(isset($_GET['add'])){
	$_SESSION['produtos_'.$_GET['add']] += '1';


}
?>