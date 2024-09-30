<?php
include("conexao.php");
include("cabecalhoGeral.php");
include("menuAdministrador.php");
?>

<div class="barra">
<h3 align="left">Consulta de Animais</h3>
</div>

<!-- Enviando para a própria página que estamos (formConsultaAnimaisAdm.php) e levando
o atibuto pesquisa por GET -->
<form action="?pesquisa=1" method="POST">

<input type="text" class="form-control" id="barrinha" name="pesquisaAnimal" placeholder="Pesquisa por nome de serviço">
<div id="lupa"> 
<button type="submit">
<img src="img/pesquisa.png">
</button>
</div>

</form>

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
include("consultaAnimaisAdm.php");

if(isset($_GET['pesquisa']) && ($_GET['pesquisa'])==1){
	//guardando na variável nomeAnimal o que veio por POST do input name="pesquisaAnimal"(formulário de pesquisa)
	
	$nomeAnimal = $_POST['pesquisaAnimal'];
	$animaisRetornados= consultaAnimais($conexao,$nomeAnimal);
	
	foreach($animaisRetornados as $cadaAnimal){
	
?>

<tr>
	<td><?php echo $cadaAnimal['nome_animal'];?></td>
	<td><?php echo $cadaAnimal['idade_animal'];?></td>
	<td><?php echo $cadaAnimal['cor_animal'];?></td>
	<td><?php echo $cadaAnimal['pelagem_animal'];?></td>
	<td><?php echo $cadaAnimal['tipo_animal'];?></td>
	<td><?php echo $cadaAnimal['sexo'];?></td>
	<td><?php 
	$id=$cadaAnimal['usuario_idusuario'];
	$comando2="SELECT * FROM usuario WHERE idusuario={$id}";
	$resultado=mysqli_query($conexao,$comando2);
	$tutor=mysqli_fetch_assoc($resultado);
	
	
	echo $tutor['nome_usuario'];
	
	
	?></td><!--Nome do tutor atual -->
	
	
	<td><?php echo $tutor['telefone'];?></td><!--telefone tutor -->
	
	<td><?php echo $tutor['email'];?></td><!--email tutor -->
	
	
	<td><?php echo $cadaAnimal['observacoes'];?></td>
	
	<td> 
	
	
	
	<form action="removeAnimais.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaAnimal['idanimais'];?>">
	<button type="submit"> <img src="img/excluir.png"> </button>
	</form>
	
	</td>
</tr>

<?php
}
}

?>
</table>
</div>
</center>

<br><br><br><br><br><br>
<?php 
include("rodapeGeral.php");
?>