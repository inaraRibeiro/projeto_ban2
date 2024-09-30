<?php
include("conexao.php");
include("menuUsuario.php");

$idUsuarioUrl=$_GET['idusuario'];



$idAnimal=$_POST['id'];

$comando="SELECT * FROM animais WHERE idanimais={$idAnimal}";
$resultado=mysqli_query($conexao, $comando);
$animalRetornado=mysqli_fetch_assoc($resultado);


$comando2="SELECT * FROM usuario WHERE idusuario={$animalRetornado['usuario_idusuario']}";
$resultado2=mysqli_query($conexao,$comando2);
$usuarioRetornado=mysqli_fetch_assoc($resultado2);



?>




<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left">Edição de cadastro de animal</h3>
</div>


<form action="editaAnimais.php" method="POST">
	
<br><br>
		
		<input type="hidden" value="<?php echo $animalRetornado['idanimais'];?>" name="id">
		
<!-- Dados pessoais do usuário-->	
			<center>
		<div class="container-fluid">
		<table cellspacing="5">
			<tr>
				<td><label class="labelEsquerdaAnimais"> Nome Animal </label></td>
				<td><input type="text"  class="inputEsquerdaAnimais" name="nomeAnimal" value="<?php echo $animalRetornado['nome_animal'];?>"></td>
			
		
				<td><label class="labelDireitaAnimais">Idade Animal </label></td>
				<td><input type="text" class="inputDireitaAnimais" name="idadeAnimal"value="<?php echo $animalRetornado['idade_animal'];?>"></td>
			</tr>
		
		
<!-- Dados de Endereço do usuário-->		
			
			<tr>
				<td><label class="labelEsquerdaAnimais">Cor</label></td>
				<td><input type="text"  name="corAnimal" class="inputEsquerdaAnimais" value="<?php echo $animalRetornado['cor_animal'];?>"></td>
				
				<td><label class="labelDireitaAnimais">Pelagem </label></td>
				<td><input type="text"  class="inputDireitaAnimais" name="pelagemAnimal" value="<?php echo $animalRetornado['pelagem_animal'];?>"></td>
			
			</tr>
		
		

<!-- Dados de Contato do usuário-->	

		
			<tr>
				<td><label class="labelEsquerdaAnimais">Tipo </label></td>
				<td><input type="text"  name="tipoAnimal" class="inputEsquerdaAnimais" value="<?php echo $animalRetornado['tipo_animal'];?>"></td>
			
				<td><label class="labelDireitaAnimais">Sexo </label></td>
				<td><input type="text"  class="inputDireitaAnimais" name="sexoAnimal" value="<?php echo $animalRetornado['sexo'];?>"></td>
			
				
			</tr>
			
		
		
		
			<tr>
				<td><label class="labelEsquerdaAnimais">Tutor Atual </label></td>
				<td><input type="text"  name="nomeUser" class="inputEsquerdaAnimais" value="<?php echo $usuarioRetornado['nome_usuario']?>"></td>
				
				<td><label class="labelDireitaAnimais">Telefone</label></td>
				<td><input type="text" class="inputDireitaAnimais" name="telefoneUser" value="<?php echo $usuarioRetornado['telefone']?>"></td>
			</tr>
			
			
			<tr>
			
			<td><label class="labelEsquerdaAnimais">Foto Animal </label></td>
				<td><input type="file" class="" name="fotoAnimal" value="<?php echo $animalRetornado['foto'];?>"></td>
				
			<td><label class="labelDireitaAnimais">Email</label></td>
			<td><input type="text" class="inputDireitaAnimais" name="emailUser" value="<?php echo $usuarioRetornado['email'];?>"></td>
				
			</tr>	
			
			<tr>
			<td><label class="labelEsquerdaAnimais">Descrição</label></td>
			<td><input type="text" name="descricaoAnimal" class="inputEsquerdaAnimais" value="<?php echo $animalRetornado['observacoes'];?>"></td>
	
			</tr>
		</table>
			</div>
			</center>	
			
		
<br>		
		
		
		<input type="reset" class="btn btn-default limpaAlteraAnimais" value="Limpar Campos">
		<input type="submit" class="btn btn-default salvarAlteraAnimais"  value="Salvar">
		
		
		
		
		
	
	</form>
<br><br>	
<?php


include("rodapeGeral.php");

?>