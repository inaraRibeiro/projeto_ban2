<?php
include ('cabecalhoGeral.php');
include('conexao.php');
include ('menuGeral.php');
?>

<!--BARRA AZUL JÁ CONFIGURADA: COLOCAR EM TODAS AS PÁGINAS QUE AINDA NÃO POSSUEM -->
<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Contato </h3>
</div>
<!---------------------------------------------------------------------------------->
<br>

	
	
<br>

<center>
<form action="enviaEmail.php" method="POST">

		<table id="tabela" cellspacing="5">
		
		<tr>
			<td><img id="emailImg" src="img/email.png">
			<p id="emailImg">adm@encontrepet.com </p></td>
			
			<td><img id="telefone" src="img/telefone.png">
			<p id="telefone1">(47)0800-1188550 </p></td>
			
			<td><img id="celularImg" src="img/celular.png"><img id="celularImgg" src="img/whatsapp.png">
			<p id="celular">(47)99465-3033 </p></td>
		</tr>
		
		<tr>
			<td><input id="nome" type="text" class="form-control nomePessoa" name="nomePessoa" placeholder="Nome" required></td>
			
			<td><input id="assunto" type="text" class="form-control nomeAssunto" name="nomeAssunto" placeholder="Assunto" required></td>
		</tr>
		
		<tr>
			<td><input type="text" id="email" class="form-control nomeEmail" name="nomeEmail" placeholder="E-mail" required></td>
		</tr>
		
		<tr>
			<td><textarea rows="3" cols="22" id="mensagem" name="mensagem" class="form-control mensagem" placeholder="Mensagem" required></textarea></td>	
		</tr>
		
		</table>	
	<input type="reset"  class="btn btn-default botaoLimpaContato" value="Limpar Campos">
	<input type="submit"  class="btn btn-default botaoEnvia" value="Enviar">
</form>	
</center>	

	
<br><br><br>
<?php
include("rodapeGeral.php");
?>