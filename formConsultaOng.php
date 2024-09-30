<?php
include("conexao.php");
?>

<div class="barra" style="margin-top: 20px;">
<h3 align="left"> Consulta de ONGs </h3>
</div>

<!-- Enviando para a própria página que estamos (formConsultaOng.php) e levando
o atibuto pesquisa por GET -->
<form action="?pesquisa=1" method="POST">

<input type="text" class="form-control" id="barrinha" name="pesquisaOng" placeholder="Pesquisa por nome de ONG">
<div id="lupa">
<button type="submit">
<img src="img/pesquisa.png">
</button>
</div>

</form>

<br>

<table class="table table-striped "> <!--Mudar class da tabela conforme boodStrap -->
<th>Nome ONG</th>
<th>Email</th>
<th>Ações</th>


<?php

include("conexao.php");
include("consultaOngs.php");

if(isset($_GET['pesquisa']) && ($_GET['pesquisa'])==1){
	//guardando na variável $nomeOng o que veio por POST do input name="pesquisaOng"(formulário de pesquisa)
	
	$nomeOng = $_POST['pesquisaOng'];
	$ongsRetornadas= consultaOngs($conexao,$nomeOng);
	
	foreach($ongsRetornadas as $cadaOng){
	
?>

<tr>
	<td><?php echo $cadaOng['nome_ong'];?></td>
	<td><?php echo $cadaOng['email'];?></td>

	
	<td> 
	
	<form action="formAlteraOngs.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaOng['idong'];?>">
	<button type="submit"> <img src="img/editar.png"> </button>
	</form>
	
	<form action="removeOng.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaOng['idong'];?>">
	<button type="submit"> <img src="img/excluir.png"> </button>
	</form>
	
	</td>
</tr>

<?php
}
}

?>
</table>