<?php session_start(); ?>
<!DOCTYPE html>
<?php include ('confere.php');
	include ('conexao.php');
?>
<html >
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300">
	<link rel="stylesheet" href="./login.css">
	<link rel="stylesheet" href="./oi.css">
</head>
<title>Login</title>
<body>

<header id="main-header">
<div class="main-header">
<div class="banner-hd"><p class="txt-hd"></div></div></header>
<section class="content" role="main"><section class="common common-form-login"><header>
</h1><p>Identifique-se!</p><div class="message-container">
</div></header><div class="common-box login" data-border="scoop"><h2>Já sou cliente</h2>
<form method="POST" action="login.php"><div class="form-cell">
<label>Email:</label><input type="text" name='Email_cli' id='Email_cli'></div><div class="form-cell">
<label>Senha:</label><input type="password" name='Senha_cli' id='Senha_cli'></div>

<button class="button button-login" type="submit" >Continuar</button><div class="clear">
</div></form></div><?php include 'login.php'?>

<center><div class="common-box signin" data-border="scoop"><h2>Ainda não sou cliente</h2>
<a href="oi.php" class="button button-signin">Cadastre-se</a></center>
<div class="clear"></div></div><div class="clear"></div></section></section></main>
<footer id="main-footer"><div class="main-footer"><div class="ft-a5">
<div class="wrp-ft"></div></div></div></footer>

</body>
</html>