<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300">
<link rel="stylesheet" href="https://static-store.worldticket.com.br/assets/224/lojamundogeek/css/checkout.css">
<link rel="stylesheet" href="https://static-store.worldticket.com.br/assets/224/common/css/common_admin.css">
<?php include 'utilitarios/conexao.php'?>
</head>
<title>Cadastro Usuário</title>
<body>
<div id="page" class="page-login">
<main id="main-content"><section class="content" role="main"><div class="errorContainer">
</div><div class="k-content"><section class="k-login-bx"><header class="page-header k-top-header">
<h1 class="k-tit-1"><span>	Cadastro</span></h1>
<center><p class="k-dTxt" style="margin-bottom: 10px;">Preencha os dados para realização do cadastro!</p></header></center>
<form id="customer" class="common common-create-account" action="https://api-lojamundogeek.worldticket.com.br/api/o/customer">
<div class="common-box half"><fieldset class="horizontal-option" id="customerType"><p class="box-title"> 
</p></fieldset><div class="form-elements person-panel pf" id="customerPFData"><div class="form-cell"><label for="cpf">CPF:</label>
<input class="cpf" id="CPF_cli" type="text" name='customer.type.pf.cpf'><span class="error-message customer.type.pf.cpf"></span></div>
<div class="form-cell"><label for="name">Nome completo:</label><input class="alphabetic" id="Nome_cli/Sobrenome_cli" type="text" name='customer.type.pf.fullName'>
<span class="error-message customer.type.pf.fullName"></span></div><div class="form-cell"><label for="birthdate">Data de nascimento:</label>
<input class="date" type="text" id="Nascimento_cli" name='customer.type.pf.birthday'><span class="error-message customer.type.pf.birthday"></span>
</div><div class="form-cell"><label for="gender">Gênero:</label><select id="gender" name='customer.type.pf.gender'><option>Escolha</option>
<option value="FEMALE">Feminino</option>
<option value="MALE">Masculino</option>
<option value="UNDEFINED">Não informar</option></select>
<span class="error-message customer.type.pf.gender"></span></div><div class="form-cell checkbox"><label>
<span class="error-message customer.type.pj.nationalSimple"></span></div></div><div class="form-cell"><label for="email">Email:</label>
<input type="email" id="Email_cli" name='customer.email'><span class="error-message customer.email"></span></div><div class="form-cell">
<label for="pass">Senha:</label><input type="password" id="Senha_cli" name='customer.account.pass'><span class="error-message customer.account.pass"></span>
</div><div class="form-cell"><label for="passconf">Confirme:</label><input type="password" id="passconf" name='customer.account.checkPass'>
<span class="error-message customer.account.checkPass"></span></div><div class="form-cell"><label for="ddd">Telefone:</label>
<div class="input-container"><input class="input-ddd ddd" maxlength="2" id="Telefone_cli" type="text" name='customer.telephones.main.ddd'>
<input class="input-tel tel" type="text" name='customer.telephones.main.number'></div><span class="error-message customer.telephones.main.number">
</span></div><div class="clear"></div></div><div class="common-box half"><p class="box-title">Endereço</p><div class="form-cell">
</div><div class="form-cell"><label for="zipCode">CEP:</label><input class="cep" type="text" id="zipCode" name='customer.address.zipCode'>
<span class="error-message customer.address.zipCode"></span></div><div class="form-cell"><label for="address">Endereço:</label>
<input class="address" id="Endereco_cli" type="text" name='customer.address.address'><span class="error-message customer.address.address"></span>
</div><div class="form-cell"><label for="number">Número:</label><input type="text" id="number" name='customer.address.number'>
<span class="error-message customer.address.number"></span></div><div class="form-cell"><label for="complement">Complemento:</label>
<input type="text" id="complement" name='customer.address.complement'><span class="error-message customer.address.complement"></span>
</div><div class="form-cell"><label for="reference">Referência:</label><input type="text" id="reference" name='customer.address.reference'>
<span class="error-message customer.address.reference"></span></div><div class="form-cell"><label for="neightborhood">Bairro:</label>
<input class="neighborhood" id="neightborhood" type="text" name='customer.address.province'><span class="error-message customer.address.province"></span>
</div><div class="form-cell"><label for="city">Cidade:</label>
<input class="city" id="city" type="text" name='customer.address.city'>
<span class="error-message customer.address.city"></span></div><div class="form-cell"><label for="state">Estado:</label>
<select class="state" id="state" name='customer.address.state'><option>Selecione um estado</option>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select><span class="error-message customer.address.state"></span></div></div><div class="clear"></div>
<div class="common-box"><button class="button button-create-account" type="submit">Criar conta</button><div class="clear"></div></div></form></section>

</body>
</html>