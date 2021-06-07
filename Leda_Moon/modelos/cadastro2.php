<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="pt-br">
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300">
	<link rel="stylesheet" href="https://static-store.worldticket.com.br/assets/235/lojamundogeek/css/checkout.css">
	<link rel="stylesheet" href="https://static-store.worldticket.com.br/assets/235/common/css/common_admin.css">
<?php include 'utilitarios/conexao.php'?>
</head>
<title>Login</title>
<body>
<div class="hero-unit" id="k-page">
<div id="page" class="page-login">
<header id="main-header">
<div class="main-header">
<div class="header" aria-role="banner">
<div class="banner-hd"><p class="txt-hd"></p><p class="txt-hd"></p></div></div></div></header>
<main id="main-content"><section class="content" role="main"><section class="common common-form-login"><header>
</h1><p>Identifique-se!</p><div class="message-container">
</div></header><div class="common-box login" data-border="scoop"><h2>Já sou cliente</h2>
<form action="https://api-lojamundogeek.worldticket.com.br/api/o/login" id="login-form" method="POST"><div class="form-cell">
<label>Email:</label><input class="input-large" type="text" name='Email_cli' id='Email_cli'></div><div class="form-cell">
<label>Senha:</label><input class="input-large" type="password" name='Senha_cli' id='Senha_cli'></div>

<button class="button button-login" type="submit" >Continuar</button><div class="clear"></div></form></div>

<div class="common-box signin" data-border="scoop"><h2>Ainda não sou cliente</h2>
<a href="C:/xampp/htdocs/Leda_Moon/modelos/oi.php" class="button button-signin">Cadastre-se</a>
<div class="clear"></div></div><div class="clear"></div></section></section></main>
<footer id="main-footer"><div class="main-footer"><div class="ft-a5">
<div class="wrp-ft"></div></div></div></footer>
<script src="https://static-store.worldticket.com.br/assets/235/common/js/common_secure_vendor.js"></script>
<script src="https://static-store.worldticket.com.br/assets/235/common/js/common_secure.js">
</script><script>!function(e,n,a,o,t,c,i)
{e.GoogleAnalyticsObject=t,e[t]=e[t]||function(){(e[t].q=e[t].q||[]).push(arguments)},e[t].l=1*new Date,c=n.createElement(a),
i=n.getElementsByTagName(a)[0],c.async=1,c.src="https://www.google-analytics.com/analytics.js",i.parentNode.insertBefore(c,i)}
(window,document,"script",0,"ga"),ga("create","UA-26675894-1",{cookieDomain:".lojamundogeek.com.br"}),ga("send","pageview");</script>
<script>var path=window.location.pathname.replace(/^\//g,"");path=path?path.replace(/\//g,"-"):"home";var channel=("lmg-"+path).substring(0,32),
_tt_omelete=_tt_omelete||[];_tt_omelete.push(["_channel",channel]),function(t){var e=document.createElement("script");e.type="text/javascript",
e.async=!0,e.src=("https:"==document.location.protocol?"https://":"http://")+"tags.t.tailtarget.com/t3m.js?i=TT-9804-3/CT-153";
var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}();</script><script>var theCaptcha=null,captchaValue;</script>
<script src="https://www.google.com/recaptcha/api.js"></script><script></script>
<script type="text/javascript">$(function(){$("#cep").mask("99999"),$("#cepComplement")
.mask("999"),$("#cep").keyup(function(e){var c=$(this).val();if(c.length>=5){var m=/^[0-9]+$/;c.match(m)&&$("#cepComplement").focus()}})});</script>
</body>
</html>