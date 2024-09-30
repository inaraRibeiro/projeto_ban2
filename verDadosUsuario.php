<?php
include("cabecalhoGeral.php");
include("conexao.php");
include ('menuUsuario.php');
?>

<?php

$id = $_GET['idusuario'];

//comando para selecionar os registros da tabela usuario
$comando = "SELECT * FROM usuario WHERE idusuario={$id}";
$resultado = mysqli_query($conexao,$comando);
$usuario= mysqli_fetch_assoc($resultado);

//comando para selecionar os registros na tabela login
$comando2= "SELECT * FROM login WHERE idlogin={$usuario['login_idlogin']}";
$resultado2=mysqli_query($conexao,$comando2);
$userSenha=mysqli_fetch_assoc($resultado2);

//A variável $usuario vai atuar organizando os dados do banco.
//$usuario['nome_usuario']= "Nome do usuario";

?>
<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left">Dados de Usuário</h3>
</div>

	<form action="editaDadosUsuario.php" method="POST">
	
<br><br>
		
		<input type="hidden" value="<?php echo $usuario['idusuario'];?>" name="id">
		
<!-- Dados pessoais do usuário-->	
			<center>
		<div class="container-fluid">
		<table cellspacing="5">
			<tr>
				<td><label class="labelEsquerda"> Nome </label></td>
				<td><input type="text"  class="dadosEsquerda" name="nomeUsuario" value="<?php echo $usuario['nome_usuario'];?>"></td>
			
		
				<td><label class="labelDireita">Sobrenome </label></td>
				<td><input type="text" class="dadosDireita" name="sobrenomeUsuario"value="<?php echo $usuario['sobrenome_usuario'];?>"></td>
			</tr>
		
		
<!-- Dados de Endereço do usuário-->		
			
			<tr>
				<td><label class="labelEsquerda"> Rua</label></td>
				<td><input type="text"  name="ruaUsuario" class="dadosEsquerda" value="<?php echo $usuario['rua'];?>"></td>
				
				<td><label class="labelDireita">Bairro </label></td>
				<td><input type="text"  class="dadosDireitaBairro" name="bairroUsuario" value="<?php echo $usuario['bairro'];?>">
				<input type="number" class="inputNumero" name="numUsuario" value="<?php echo $usuario['numero'];?>">
				
				</td>
				
			
			</tr>
		
		

<!-- Dados de Contato do usuário-->	

		
			<tr>
				<td><label class="labelEsquerda">Telefone </label></td>
				<td><input type="text"  name="telUsuario" class="dadosEsquerda" value="<?php echo $usuario['telefone'];?>"></td>
			
				<td><label class="labelDireita">Celular </label></td>
				<td><input type="text"  class="dadosDireita" name="celUsuario" value="<?php echo $usuario['celular'];?>"></td>
			
				
			</tr>
			
		
		
		
			<tr>
				<td><label class="labelEsquerda">User </label></td>
				<td><input type="text"  name="userCliente" class="dadosEsquerda" value="<?php echo $userSenha['user']?>"></td>
				<td><label class="labelDireita">Senha</label></td>
				<td><input type="password" class="dadosDireita" name="senhaCliente" value="<?php echo $userSenha['senha']?>"></td>
			</tr>
			
			
			
			<td><label class="labelEsquerda">Email </label></td>
				<td><input type="text" class="dadosEsquerda" name="emailUsuario" value="<?php echo $usuario['email'];?>"></td>
			
			
		</table>
			</div>
			</center>
		
		
<br><br>		
		
		
		<input type="reset" class="btn btn-default limpa" id="limpar" value="Limpar Campos">
		<input type="submit" class="btn btn-default salva" id="salvar" value="Salvar">
		
		
		
		
		
	
	</form>
<br><br>	
<?php


include("rodapeGeral.php");

?>