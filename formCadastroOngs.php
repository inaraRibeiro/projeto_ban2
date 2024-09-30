<?php
include("cabecalhoGeral.php");
include("conexao.php");
include ("menuAdministrador.php");
?>

<div class="barra">
<h3 align="left"> Cadastro de ONG </h3>
</div>

	<form action="cadastraOng.php" method="POST">
	
<br><br>
<center>
		<table>
		
			<tr>
				<td><input type="text" id="input" class="form-control" name="nomeOng" placeholder="Nome ONG"></td>
			</tr>
		
			<tr>
				<td><input type="text" id="input" class="form-control" name="emailOng" placeholder="Email ONG"></td>
			</tr>
		</table>
		
		<div id="cadastra">
		<input type="submit"  class="btn btn-default ok" value="Cadastrar"> 
		
		<input type="reset" class="btn btn-default limpando" value="Limpar">
		</div>
</center>
	</form>
	
<?php

include("formConsultaOng.php");
include("rodapeGeral.php");

?>