<html>
<?php include 'head.php' ?>
<body>

<div>
	<div>
		<form action="javascript:void(0)">
			<p class="title">Ainda não possuo conta</p>
			<p>Faça seu cadastro, é super rápido</p>
			<button class="button inputButton" onclick="location.href="/cad-cliente">Continuar</button>
		</form>
		
	<form action="javascript:void(0)">
		<p class="title">Já possuo conta</p>
		<p></p>
		<input type="e-mail" class="inputButton" placeholder="E-mail" />
		<input type="password" class="inputButton" placeholder="Senha" maxlength="12" />
		<a href=>Esqueceu seu senha?</a>
		<p>Mensagem de erro</p>
		<p></p>
		<button class="button inputButton" onclick="login()">Logar</button>
		<p></p>
		<p></p>
		<p></p>
	</form>
	</div>
</div>