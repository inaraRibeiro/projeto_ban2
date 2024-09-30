<?php
include ("cabecalhoGeral.php");
include("menuUsuario.php");
include("conexao.php");

$idUser=$_GET['idusuario'];

$comando="SELECT * FROM usuario WHERE idusuario={$idUser}";
$resultado=mysqli_query($conexao,$comando);
$clienteRetornado=mysqli_fetch_assoc($resultado);

?>

<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Cadastro de Animais </h3>
</div>

<br>

	<form action="cadastraAnimais.php" method="POST">
	
		<center>
		<div class="container-fluid cadAnimais">
		<table cellspacing="5">
		
		<tr>
			
			<td><input type="text" class="inputEsquerdaNomeAnimal"  name="nomeAnimal" placeholder="Digite o nome do animal" required></td>
			
			<td><input type="number" class="inputDireitaIdadeAnimal" id="idade" name="idadeAnimal" placeholder="Idade do animal" required>
				
				<input type="radio" name="idade" value="anos"/> Anos 
				<input type="radio" name="idade" value="meses"/> Meses 
				<input type="radio" name="idade" value="dias"/> Dias </td>	
				
		</tr>
		
		
			
<tr>
	<td><select  class="inputEsquerda" name="corAnimal" id="cor">
	<option value=""> Cor </option>
	<option value="Beje"> Beje </option>
	<option value="Branco"> Branco </option>
	<option value="Marrom"> Marrom </option>
	<option value="Mesclado"> Mesclado </option>
	<option value="Preto"> Preto </option>
	</select></td>
	
	<td><select class="inputDireita" name="pelagemAnimal" id="pelagem">
	<option value=""> Pelagem </option>
	<option value="Grande"> Grande </option>
	<option value="Média"> Média </option>
	<option value="Pequena"> Curta </option>
	</select></td>
</tr>
	
<tr>	
	<td><select class="inputEsquerda" name="tipoAnimal" id="tipo">
	<option value=""> Tipo Animal </option>
	<option value="Cachorro"> Cachorro </option>
	<option value="Gato"> Gato </option>
	</select></td>
	
	<td><select class="inputDireita" name="sexoAnimal" id="sexo">
	<option value=""> Sexo </option>
	<option value="Fêmea"> Fêmea </option>
	<option value="Macho"> Macho </option>
	</select></td>
</tr>
		
			

<!--Aqui vai o telefone e email do usuário que já está logado no site, por meio de um select-->			
			<tr>
			
			<input type="hidden" value="<?php echo $idUser;?>" name="idUsuario">
			
			
			<td><select  class="inputEsquerda" name="tutorAtual">
			<option><?php echo $clienteRetornado['nome_usuario']; ?></option>
			</select></td>
			
			
				<td><select class="inputDireita" name="telefoneTutor">
				
				<option><?php echo $clienteRetornado['telefone'];?> </option>
				</select></td>
			
			
			
				
				
			</tr>	
			
			<tr>
			
			
				<td><label>Foto do animal</label>
			<input type="file" class="inputEsquerdaFotoAnimal" name="fotoAnimal" placeholder="Foto Animal"></td>
			
			<td><select class="inputDireita" name="emailTutor">
				<option><?php echo $clienteRetornado['email'];?> </option>
				</select></td>
			
			
			</tr>
			
			
			</table>
		</div>
		</center>
			
			
			
				
			
		<textarea rows="3" cols="22" name="observacaoAnimal" class="areaTexto" placeholder="Digite informações adicionais sobre o animal" required></textarea>
				
			
			
		
		
	<br>
	
	<input type="reset"  class="btn btn-default botaoLimpaCadAnimais" value="Limpar Campos">
	<input type="submit"  class="btn btn-default botaoCadAnimais " value="Cadastrar">
	
	
	
	
	</form>

	
<br><br>
<?php
include("rodapeGeral.php");
?>