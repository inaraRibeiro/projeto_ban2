
<?php
include("cabecalhoGeral.php");
include("conexao.php");
include ('menuAdministrador.php');
?>

<?php

$id = $_POST['id'];



$comando = "SELECT * FROM usuario WHERE idusuario={$id}";

$resultado = mysqli_query($conexao,$comando);

$usuario= mysqli_fetch_assoc($resultado);
//A variável $usuario vai atuar organizando os dados do banco.
//$usuario['nome_usuario']= "Nome do usuario";

?>
<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left">Edição de Usuário</h3>
</div>

	<form action="editaUsuario.php" method="POST">
	
<br><br>
		
		<input type="hidden" value="<?php echo $usuario['idusuario'];?>" name="id">
		
<!-- Dados pessoais do usuário-->			
		<fieldset>
		<legend>Dados Pessoais</legend>
		<table cellspacing="2">
			<tr>
				<td><label> Nome </label></td>
				<td><input type="text" class="form-control" name="nomeUsuario" value="<?php echo $usuario['nome_usuario'];?>"></td>
			
		
				<td><label>Sobrenome </label></td>
				<td><input type="text" class="form-control" name="sobrenomeUsuario"value="<?php echo $usuario['sobrenome_usuario'];?>"></td>
			</tr>
		</table>
		</fieldset>
<br><br><br>		
<!-- Dados de Endereço do usuário-->		
		<fieldset>
		<legend>Dados de Endereço</legend>
		<table cellspacing="2">		
			<tr>
				<td><label> Rua</label></td>
				<td><input type="text" class="form-control" name="ruaUsuario" value="<?php echo $usuario['rua'];?>"></td>
				
				<td><label>Bairro </label></td>
				<td><input type="text" class="form-control" name="bairroUsuario" value="<?php echo $usuario['bairro'];?>"></td>
			
				<td><label>Número </label></td>
				<td><input type="number" class="form-control" name="numUsuario" value="<?php echo $usuario['numero'];?>"></td>
			</tr>
		</table>
		</fieldset>
		
<br><br><br>
<!-- Dados de Contato do usuário-->	

		<fieldset>
		<legend>Dados de Contato</legend>
		<table cellspacing="2">		
			<tr>
				<td><label>Telefone </label></td>
				<td><input type="text" class="form-control" name="telUsuario" value="<?php echo $usuario['telefone'];?>"></td>
			
				<td><label>Celular </label></td>
				<td><input type="text" class="form-control" name="celUsuario" value="<?php echo $usuario['celular'];?>"></td>
			
				<td><label>Email </label></td>
				<td><input type="text" class="form-control" name="emailUsuario" value="<?php echo $usuario['email'];?>"></td>
			</tr>
			
		</table>
		</fieldset>
<br>		
		<table>
		<tr>
		
		<td><input type="submit" class="btn btn-default" value="Salvar"></td> 
		
		<td><input type="reset" class="btn btn-default" value="Limpar"></td>
		
		</tr>
		</table>
		
	
	</form>
<br><br>	
<?php


include("rodapeGeral.php");

?>