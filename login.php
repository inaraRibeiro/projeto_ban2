
<?php

include("menuGeral.php");
include ("cabecalhoGeral.php");


	/* verificando se, da página efetua 'login' veio o parametro logado por GET 
	e verificando se esse parametro veio com valor 1, que equivale erro no login*/
	
	if (isset($_GET['logado']) && ($_GET['logado']==1)){
		
		$mensagem="<p class='alert-danger'> Usuário ou senha inválido! </p>";
		
	}else{
		
		$mensagem="";
		
	}

?>



<!-- mostrando mensagem -->

	<?php echo $mensagem; ?>

<fieldset>

<div class="barra">
<h3 align="left"> Entre ou cadastre-se </h3>
</div>


<p id="sim"> JÁ SOU CADASTRADO </p>

<table cellspacing="2">
	<div class="cadastrado" id="teste">
	<form action="efetuaLogin.php" method="post">
		<tr><br>
		<td><input id="emailLogin" type="text" name="emailLogin" class="form-control" placeholder="Login" required></td>
		</tr>
			
		<tr>
		<td><input id="senhaLogin"type="password" name="senhaLogin" class="form-control" placeholder="Senha" required></td>
		</tr>
<br>
		<tr>
		<td><input type="submit" id="limparCampo" class="btn btn-default entrar" value="Entrar"></td>
		
		</tr>
		
	</form>
	</div>
</table>


<br>


<br>

<div class="proximo">

<center><p id="nao"> AINDA NÃO SOU CADASTRADO </p></center>
<br>
<center><p id="msg"> Se você ainda não é cadastrado, cadastre-se agora é rápido e fácil! </p></center>

<br>

<a href="formCadastroCliente.php"><input type="button" value="Próximo" class="btn btn-default botaoProximo"></a>


</div>

<br><br><br><br><br>

<?php

include ("rodapeGeral.php");

?>