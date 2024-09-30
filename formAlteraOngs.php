<?php
include("conexao.php");
include ('menuAdministrador.php');
include("cabecalhoGeral.php");

$id = $_POST['id'];



$comando = "SELECT * FROM ong WHERE idong={$id}";

$resultado = mysqli_query($conexao,$comando);

$ong= mysqli_fetch_assoc($resultado);
//A variável $ong vai atuar organizando os dados do banco.
//$ong['nome_ong']= "Nome da Ong";

?>

<div class="barra">
<h3 align="left">Edição de ONG</h3>
</div>
<br><br><br><br>

	<form action="editaOng.php" method="POST">
	

		<center>
		<div class="container-fluid alteraOng">
		<table cellspacing="5">
		<input type="hidden" value="<?php echo $ong['idong'];?>" name="id">
		
			<tr>
				<td><label class="labelAlteraOng"> Nome ONG </label></td>
				<td><input type="text" class="dadosAlteraOng" name="nomeOng" value="<?php echo $ong['nome_ong'];?>"></td>
			</tr>
		
			<tr>
				<td><label class="labelAlteraOng">Email </label></td>
				<td><input type="text" class="dadosAlteraOng" name="emailOng" value="<?php echo $ong['email'];?>"></td>
			</tr>
		</table>
		</div>
		</center>	
		
		
		<input type="reset" class="btn btn-default limparAlteraOng " value="Limpar campos">
		<input type="submit" class="btn btn-default " value="Salvar"> 
		
		
		
		
		
		
	
	</form>
	
<br><br><br><br><br>	
<?php

include("rodapeGeral.php");

?>