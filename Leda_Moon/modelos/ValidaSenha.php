<?php
class ValidaSenha
{
	public function setValidaSenha($pass)
	{
		if(strlen($pass)<1)
		return 'Informe a Senha';
		else
		if(!preg_match('/^[0-9a-z]$/i',$pass))
		return 'Senha inválida';
		else
		return $pass;
	}
}	
?>