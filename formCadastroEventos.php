<?php
include ('cabecalhoGeral.php');
include('conexao.php');
include ('menuAdministrador.php');
?>

<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Cadastro de Eventos </h3>
</div>

<br>


	<form action="cadastraEventos.php" method="POST">
	
<br>

<center>

		<table cellspacing="5">
		
		<tr>
			
			
				<td><input type="text" class="form-control" id="input" name="nomeEvento" placeholder="Nome do Evento"></td>
			
		
			
			
				<td><input type="date" class="form-control" name="dataEvento" placeholder="Data"></td>
			</tr>
			
			<tr>
			
				<td><input type="text" class="form-control" id="input" name="horarioEvento" placeholder="Horário"></td>
			
			
			
			
				<td><input type="text" class="form-control" name="localEvento" placeholder="Local"></td>
			</tr>
		
			<tr>
				<td><input type="text" class="form-control" id="input" name="endEvento" placeholder="Endereço"></td>
			
			
			
				
				<td><input type="text" class="form-control" name="telEvento" placeholder="(xx)xxxx-xxxx"></td>
			</tr>
			
			<tr>
			<td>Foto do Evento<input type="file" id="foto" name="fotoEvento" placeholder="Foto Evento"><br></td>
			</tr>
			</table>
			<tr>
				<td><textarea rows="3" cols="22" name="descricaoEvento" class="form-control textinho" placeholder="Mensagem"></textarea></td>	
			</tr>
			
			
		<input type="reset" class="btn btn-default limpo" value="Limpar">
	<input type="submit"  class="btn btn-default" value="Cadastrar">
		
		
	
	
</center>	
	</form>
	
<br><br>
<?php
include("formConsultaEventos.php");
include("rodapeGeral.php");

?>