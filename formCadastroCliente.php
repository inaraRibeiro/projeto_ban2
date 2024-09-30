<?php
include("cabecalhoGeral.php");
include("conexao.php");
include ('menuGeral.php');
?>

<div class="barra">
<h3 align="left">Cadastro de Usuário</h3>
</div>

<br><br>


<!--Formulário para cadastrar os dados do usuário -->	
	<form action="cadastraClientes.php" method="POST">

		
		<center>
		<div class="container-fluid">
		<table cellspacing="5">
			<tr>
				
				<td><input type="text" class="esquerda" name="nomeCliente" placeholder="Nome" required></td>
				<td><input type="text" class="direita" name="sobrenomeCliente" placeholder="Sobrenome" required></td>
				
			</tr>
		
			

			<tr>
				<td><input type="text" class="esquerda" name="ruaCliente" placeholder="Rua" required></td>
				<td><input type="text" class="direitaBairro" name="bairroCliente" placeholder="Bairro" required></td>
				<td><input type="number" id="inputNum" name="numeroCliente" placeholder="Núm" required></td>
			</tr>
		
		
		
			<tr>
				<td><input type="text" class="esquerda" name="telCliente" placeholder="Telefone (xx)xxxx-xxxx" required></td>
				<td><input type="text" class="direita" name="celCliente" placeholder="Celular (xx)xxxx-xxxx" required></td>
				
			</tr>
		
				
		
		
			<tr>
				<td><input type="text" class="esquerda" name="userCliente" placeholder="Nome de usuário" required></td>
				<td><input type="password" class="direita" name="senhaCliente" placeholder="Crie uma senha" required></td>
			</tr>
			</table>
		</div>
		</center>
		
			
			<input type="text" class="inputEmail" name="emailCliente" placeholder="Email" required>
			
			
		
			
<br><br>		
		
		
		<input type="reset" class="btn btn-default botaoLimpa" value="Limpar Campos">
		<input type="submit" class="btn btn-default botaoCadastraCliente" value="Cadastrar"> 
		
		
		
		
		
		
	
		
		
</form>
<!--Fazer uma lógica para que o usuário seja redirecionado para homeUsuario.php assim que concluir o cadastro -->

<br><br>
<?php


include("rodapeGeral.php");

?>


	