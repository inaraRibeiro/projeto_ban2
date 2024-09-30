<?php
include("conexao.php");
include("menuUsuario.php");

$id=$_GET['idusuario'];


?>


<div class="barra">
<h3 align="left">Consulta de Animais</h3>
</div>

<!-- Enviando para a própria página que estamos (verAnimaisCadastradosUsuario.php) e levando
o atibuto pesquisa por GET -->

<!--<form action="?idusuario=<?php //echo $id; ?>" method="POST">

<input type="text" class="form-control" id="barrinha" name="pesquisaAnimal" placeholder="Pesquisa por nome de Animal">
<div id="lupa"> 
<button type="submit">
<img src="img/pesquisa.png">
</button>
</div>

</form>-->

<br>
<center>
<div >
<table class="table table-striped " > 
<th>Nome</th>
<th>Idade</th>
<th>Cor</th>
<th>Pelagem</th>
<th>Tipo de animal</th>
<th>Sexo</th>
<th>Tutor Atual</th>
<th>Telefone para contato</th>
<th>Email</th>
<th>Descrição</th>
<th>Ações</th>

<?php

include("conexao.php");

//include("consultaAnimaisUsuario.php");

//if(isset($_GET['pesquisa']) && ($_GET['pesquisa'])==1){
	

	//guardando na variável nomeAnimal o que veio por POST do input name="pesquisaAnimal"(formulário de pesquisa)
	
	//$nomeAnimal = $_POST['pesquisaAnimal'];
	
	$comando="SELECT * FROM animais WHERE usuario_idusuario={$id}";
	
	$resultado=mysqli_query($conexao,$comando);
	
	$animaisRetornados=mysqli_fetch_assoc($resultado);
	
?>

<input type="hidden" value="<?php echo $cadaAnimal['usuario_idusuario'];?>" name="idUser">

<tr>
	<td><?php echo $animaisRetornados['nome_animal'];?></td>
	<td><?php echo $animaisRetornados['idade_animal'];?></td>
	<td><?php echo $animaisRetornados['cor_animal'];?></td>
	<td><?php echo $animaisRetornados['pelagem_animal'];?></td>
	<td><?php echo $animaisRetornados['tipo_animal'];?></td>
	<td><?php echo $animaisRetornados['sexo'];?></td>
	<td><?php 
	$id=$animaisRetornados['usuario_idusuario'];
	$comando2="SELECT * FROM usuario WHERE idusuario={$id}";
	$resultado2=mysqli_query($conexao,$comando2);
	$tutor=mysqli_fetch_assoc($resultado2);
	
	
	echo $tutor['nome_usuario'];
	
	
	?></td><!--Nome do tutor atual -->
	
	
	<td><?php echo $tutor['telefone'];?></td><!--telefone tutor -->
	
	<td><?php echo $tutor['email'];?></td><!--email tutor -->
	
	
	<td><?php echo $animaisRetornados['observacoes'];?></td>
	
	<td> 
	
	<form action="formAlteraAnimais.php?idusuario=<?php echo $id; ?>" method="POST">
	<input type="hidden" name="id" value="<?php echo $animaisRetornados['idanimais'];?>">
	<button type="submit"> <img src="img/editar.png"> </button>
	</form>
	
	</td>
</tr>


</table>
</div>
</center>




<br><br><br><br><br><br><br>


<?php
include("rodapeGeral.php");
 ?>