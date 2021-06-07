<?php
class Login
{
	private $vem,$vsh,$email,$senha,$log,$dds;
	public function setLogin($email,$senha)
	{
		$this->vem=new ValidaEmail;
		$this->vsh=new ValidaSenha;
		
		$this->email=$this->vem->setValidaEmail($email);
		$this->senha=$this->vsh->setValidaSenha($senha);
		
		$this->log=$this->senha==$senha?
			$this->funcoes->select('*','user','WHERE email=? && senha=?',array($this->email,$this->senha));
			FALSE;
			
		//return $this->log
	}
}
?>