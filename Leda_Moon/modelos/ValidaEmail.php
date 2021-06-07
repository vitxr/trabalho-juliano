<?php
class ValidaEmail
{
	public function setValidaEmail($email)
	{
		if(empty($email))
			return 'Informe o e-mail';
		else
		return 'E-mail validado';
	}
}
?>