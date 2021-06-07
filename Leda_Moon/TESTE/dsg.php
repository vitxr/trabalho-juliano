<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/teste/teste/teste.css">
<title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>
<form action="#" method="post">
    <fieldset>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 10em" value="">
            </div>
            <div class="campo">
                <label for="snome">Sobrenome</label>
                <input type="text" id="snome" name="snome" style="width: 10em" value="">
            </div>
        </fieldset>
        <div class="campo">
            <label>Sexo</label>
            <label>
                <input type="radio" name="sexo" value="masculino"> Masculino
            </label>
            <label>
                <input type="radio" name="sexo" value="feminino"> Feminino
            </label>
        </div>
        <div class="campo">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 20em" value="">
        </div>
		<div class="campo">
            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" style="width: 15em" value="">
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
        </div>

        <fieldset class="grupo">
            <div class="campo">
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
            </div>
            <div class="campo">
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <option value="">--</option>
                    <option value="PR">PR</option>
					<option value="SP">SP</option>
					<option value="RJ">RJ</option>
					<option value="RS">RS</option>
                </select>
            </div>
        </fieldset>
		
        <div class="campo">
            <label for="nascimento">Nascimento</label>
            <input type="text" id="nascimento" name="nascimento" style="width: 10em" value="">
        </div>
		<div class="campo">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" style="width: 10em" value="">
        </div>

	<div class="content">
     <a href="#" class="botao01">Botao</a>
    </div>
    </fieldset> 
</form>