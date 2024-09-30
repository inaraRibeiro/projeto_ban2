<?php
include("conexao.php");
?>

<div class="barra">
<h3 align="left">Consulta de Eventos</h3>
</div>

<!-- Enviando para a própria página que estamos (formConsultaEventos.php) e levando
o atibuto pesquisa por GET -->
<form action="?pesquisa=1" method="POST">

<input type="text" class="form-control" id="barrinha" name="pesquisaEvento" placeholder="Pesquisa por nome do Evento">
<div id="lupa"> 
<button type="submit">
<img src="img/pesquisa.png">
</button>
</div>

</form>

<br>

<table class="table table-striped " > <!--Mudar class da tabela conforme boodStrap -->
<th>Nome</th>
<th>Data</th>
<th>Horário</th>
<th>Local</th>
<th>Endereço</th>
<th>Telefone</th>
<th>Descrição</th>
<th>Ações</th>

<?php

include("conexao.php");
include("consultaEventos.php");

if(isset($_GET['pesquisa']) && ($_GET['pesquisa'])==1){
	//guardando na variável nomeEvento o que veio por POST do input name="pesquisaEvento"(formulário de pesquisa)
	
	$nomeEvento = $_POST['pesquisaEvento'];
	$eventosRetornados= consultaEventos($conexao,$nomeEvento);
	
	foreach($eventosRetornados as $cadaEvento){
	
?>

<tr>
	<td><?php echo $cadaEvento['nome_evento'];?></td>
	<td><?php echo $cadaEvento['data_evento'];?></td>
	<td><?php echo $cadaEvento['horario_evento'];?></td>
	<td><?php echo $cadaEvento['local_evento'];?></td>
	<td><?php echo $cadaEvento['endereco_evento'];?></td>
	<td><?php echo $cadaEvento['telefone_evento'];?></td>
	<td><?php echo $cadaEvento['descricao'];?></td>
	
	<td> 
	
	<form action="formAlteraEventos.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaEvento['ideventos'];?>">
	<button type="submit"> <img src="img/editar.png"> </button>
	</form>
	
	<form action="removeEventos.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaEvento['ideventos'];?>">
	<button type="submit"> <img src="img/excluir.png"> </button>
	</form>
	
	</td>
</tr>

<?php
}
}

?>
</table>