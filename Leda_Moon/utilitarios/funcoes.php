<?php
//CRIAR A CLASS
class recordset{
//DECLARAÇÃO DE VARIAVEIS PUBLICAS
public $banco = 'tcc'; //nome do banco tcc e tals
public $usuario = 'root'; //nome do usuario
public $senha = ''; //senha do banco
public $hostname = 'localhost'; //caminho do banco
//FIM

//CONECTAR AO BANCO DE DADOS
function conexao(){
	$conn = mysql_connect($this->hostname, $this->usuario, $this->senha);
	mysql_select_db($this->banco) or die ('Não foi possivel conectar'.mysql_error()); //this serve para chamar as variaveis informadas acima
	//or die serve para erros.
	
	mysql_query("SET NAMES 'utf8'"); // MACETES para acentuação no banco
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
}
//SELECIONAR DADOS DO BANCO DE DADOS
function seleciona($sql){
	$result = mysql_query($sql) or die ('Não foi possivel conectar');
	return $result;
}




}
?>