<?php
include("conexao.php");
include("cabecalhoGeral.php");
include("menuAdministrador.php");

 ?>
<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left">Consulta de Usuário</h3>
</div>

<!-- Enviando para a própria página que estamos (formConsultaCliente.php) e levando
o atibuto pesquisa por GET -->
<form action="?pesquisa=1" method="POST">

<input type="text" id="barrinha" class="form-control" name="pesquisaUsuario" placeholder="Pesquisa por nome de usuário">
<div id="lupa"> 
<button type="submit">
<img src="img/pesquisa.png">
</button>
</div>

</form>

<br>

<table class="table table-striped "> <!--Mudar class da tabela conforme boodStrap -->
<th>Nome</th>
<th>Sobrenome</th>
<th>Rua</th>
<th>Bairro</th>
<th>Número</th>
<th>Telefone</th>
<th>Celular</th>
<th>Email</th>
<th>Ações</th>

<?php

include("conexao.php");
include("consultaClientes.php");

if(isset($_GET['pesquisa']) && ($_GET['pesquisa'])==1){
	//guardando na variável $nomeUsuario o que veio por POST do input name="pesquisaUsuario"(formulário de pesquisa)
	
	$nomeUsuario = $_POST['pesquisaUsuario'];
	$usuariosRetornados= consultaClientes($conexao,$nomeUsuario);
	
	foreach($usuariosRetornados as $cadaUsuario){
	
?>

<tr>
	<td><?php echo $cadaUsuario['nome_usuario'];?></td>
	<td><?php echo $cadaUsuario['sobrenome_usuario'];?></td>
	<td><?php echo $cadaUsuario['rua'];?></td>
	<td><?php echo $cadaUsuario['bairro'];?></td>
	<td><?php echo $cadaUsuario['numero'];?></td>
	<td><?php echo $cadaUsuario['telefone'];?></td>
	<td><?php echo $cadaUsuario['celular'];?></td>
	<td><?php echo $cadaUsuario['email'];?></td>
	
	<td> 
	
	
	
	<form action="removeClientes.php" method="post">
	<input type="hidden" name="id" value="<?php echo $cadaUsuario['idusuario'];?>">
	<button type="submit"> <img src="img/excluir.png"> </button>
	</form>
	
	</td>
</tr>

<?php
}
}

?>
</table>
<br><br><br><br><br><br>
<?php 
include("rodapeGeral.php");
?>