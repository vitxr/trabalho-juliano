<?php
class ValidaEntradaUsuario
{
	public function vEntradaUsuario(&entrada)
	{return htmlentitles(strip_tags(&entrada), ENT_QUOTES);
}
?>