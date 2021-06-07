<html>
<?php include 'head.php' ?>

<body>

<div>
	<form action="javascript:void(0)">
		<span class="msg-cad">Mensagem de retorno</span>
		<p>Dados</p>
		
		<label><input type="text" class="input inputButton" id="nome" placeholder="Nome/Sobrenome" /> </label>
		<label><select class="select" id="genero">
			<option>Gênero</option>
			<option>Feminino</option>
			<option>Masculino</option>
		</select>
		</label>
		<label><input type="text" class="input inputButton" id="Nascimento_cli" placeholder="Nascimento"/> </label>
		<label><input type="text" class="input inputButton" id="CPF_cli" placeholder="CPF"/> </label>
		<label><input type="text" class="input inputButton" id="ddd" placeholder="DDD"/> </label>
		<label><input type="text" class="input inputButton" id="Telefone_cli" placeholder="Telefone"/> </label>
		<label><input type="text" class="input inputButton" id="Celular_cli" placeholder="Celular"/> </label>
		<label><input type="text" class="input inputButton" id="cep" placeholder="CEP*"/> </label>
		<label><select class="select" id="estado">
			<option>Estado</option>
			<optgroup label="Sudeste">
			<option>São Paulo</option>
			<option>Rio de Janeiro</option>
			<option>Minas Gerais</option>
			</optgroup>
				<optgroup label="Nordeste">
			<option>Bahia</option>
			</optgroup>
				<optgroup label="Sul">
			<option>Rio Grande do Sul</option>
			</optgroup>
				<optgroup label="Norte">
			<option>Amazonas</option>
			<option>Acre</option>
			<option>Rondônia</option>
			</optgroup>
			</select>
		</label>
		<label><input type="text" class="input inputButton" id="cidade" placeholder="Cidade"/> </label>
		<label><input type="text" class="input inputButton" id="bairro" placeholder="Bairro"/> </label>
		<label><input type="text" class="input inputButton" id="endereco" placeholder="Endereço"/> </label>
		<label><input type="text" class="input inputButton" id="numero" placeholder="n**"/> </label>
		<label><input type="text" class="input inputButton" id="complemento" placeholder="Complemento"/> </label>
		<label><input type="text" class="input inputButton" id="observacoes" placeholder="Observações"/> </label>
		
		<p>Dados Login</P>
		<label><input type="email" class="input inputButton" id="email" placeholder="E-mail" /> </label>
		<label><input type="email" class="input inputButton" id="senha" placeholder="Senha" /> </label>
		<label><input type="email" class="input inputButton" id="rSenha" placeholder="Confirmar senha" /> </label>
		
		<button class="button inputButton">CADASTRAR</button>
	</form>		
</div>
</body>
</html>
