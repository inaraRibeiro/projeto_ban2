<?php
include("conexao.php");
include ('menuAdministrador.php');
include("cabecalhoGeral.php");

$id = $_POST['id'];


$comando = "SELECT * FROM eventos WHERE ideventos={$id}";

$resultado = mysqli_query($conexao,$comando);

$evento= mysqli_fetch_assoc($resultado);
//A variável $evento vai atuar organizando os dados do banco.
//$evento['nome_evento']= "Nome do Evento";

?>

<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left">Edição de Evento </h3>
</div>

<br>

	<form action="editaEventos.php" method="POST">
	
	<center>
		<div class="container-fluid">
		<table cellspacing="5">
		<input type="hidden" value="<?php echo $evento['ideventos'];?>" name="id">
		
			<tr>
				<td><label class="labelEsquerda"> Nome Evento </label></td>
				<td><input type="text" class="dadosEsquerdaEventos" name="nomeEvento" value="<?php echo $evento['nome_evento'];?>"></td>
			
				<td><label class="labelDireita">Data </label></td>
				<td><input type="text" class="dadosDireitaEventos" name="dataEvento"value="<?php echo $evento['data_evento'];?>"></td>
			</tr>
			
			<tr>
				<td><label class="labelEsquerda"> Horário </label></td>
				<td><input type="text" class="dadosEsquerdaEventos" name="horarioEvento" value="<?php echo $evento['horario_evento'];?>"></td>
			
				<td><label class="labelDireita"> Local </label></td>
				<td><input type="text" class="dadosDireitaEventos" name="localEvento" value="<?php echo $evento['local_evento'];?>"></td>
			</tr>
			
			<tr>
				<td><label class="labelEsquerda">Endereço </label></td>
				<td><input type="text" class="dadosEsquerdaEventos" name="endEvento" value="<?php echo $evento['endereco_evento'];?>"></td>
			
				<td><label class="labelDireita">Telefone </label></td>
				<td><input type="text" class="dadosDireitaEventos" name="telEvento" value="<?php echo $evento['telefone_evento'];?>"></td>
			</tr>
			
			
		
		
		
			
				<td><label class="labelEsquerda">Descrição </label></td>
				<td><input type="text" class="dadosEsquerdaEventos" name="descEvento" value="<?php echo $evento['descricao'];?>"></td>
		
		</table>
		</div>
		</center>
		
		
		<br><br><br>
		
		
		<input type="reset" class="btn btn-default limparAlteraEventos" value="Limpar campos">
		<input type="submit" class="btn btn-default salvarAlteraEventos" value="Salvar">
		
		
		
		
		
		
	
	</form>

	
<?php
include("rodapeGeral.php");
?>