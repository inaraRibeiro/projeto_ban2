<?php
include ('cabecalhoGeral.php');
include('conexao.php');
include ('menuGeral.php');


?>

<link rel="stylesheet" href="css/style.css">

<div class="barra">
<h3 align="left"> Ajude-nos </h3>
</div>

<br>
<div class="container">

	<form action="enviaEmail.php" method="POST">
	<fieldset class="form-group row">


<center>
<table cellspacing="5">
		
		<tr>
			<center>
			<p class="paragrafos">ATENÇÃO! Esta ajuda não é destinada ao site, mas sim as instituições/ONGs parceiras! </p>
			<p class="paragrafos"> Você pode ajudar de várias formas, contribua! Após o preenchimento do formulário, a instituição selecionada entrará em contanto com você. </p>
			</center>
			<br><br>
			
			<td><input type="text" class="nome" name="nomePessoa" placeholder="Nome" required></td>
			
			<td><input type="text" class="sobrenomeEmail" name="sobrenomePessoa" placeholder="Sobrenome" required></td>
		</tr>
		
		<tr>
			<td><input type="text" class="tel"  name="telPessoa" placeholder="Telefone (xx) XXXX-XXXX" required></td>
			
			<td><input type="text" class="sobrenomeEmail" name="emailPessoa" placeholder="E-mail" required></td>
		</tr>
		
		
	
			
	<tr>
	<td><select placeholder="O que quero doar" name="cor" class="doar" >
	<option value=""> O que quero doar </option>
	<option value="AC"> Brinquedos </option>
	<option value="AC"> Produto de limpeza </option>
	<option value="AC"> Ração </option>
	</select></td>
	
	<td><input type="number" class="quantidade" name="qtde" placeholder="Quantidade" required></td>
	
	<td><select class="instituicao" name="instituicao" >
	<option>Selecione uma instituição</option>
	<?php 
	$comando="SELECT * FROM ong WHERE ativo=1";
	$resultado=mysqli_query($conexao,$comando);
	$ongs=array();
	
	//enquanto tiver clientes em $resultado, organize eles com o mysqli_fetch_assoc e guarde cada um no $guardaOngs
	while($guardaOngs=mysqli_fetch_assoc($resultado)){
	array_push($ongs,$guardaOngs);
	
}

	//para cada cliente que tiver dentro do array $ongs, cada um deve ser $cadaOng
	foreach($ongs as $cadaOng){
	
	
	?>
	
	
	<option value="<?php echo $cadaOng['idong'];?>"> 

	<?php echo $cadaOng['nome_ong'];?>

	</option>

<?php
	}
?>
	
	</select></td>
		
	</tr>
	</table>
			<tr>
				<td><textarea rows="3" cols="22" name="descricao" class="desc" placeholder="Descrição" required></textarea></td>	
			</tr>
			
	
</center>		
	<input type="reset"  class="btn btn-default botaoLimparAjudenos" value="Limpar Campos">
	<input type="submit"  class="btn btn-default " value="Enviar">
	
	
</fieldset>
	</form>

</div>
	

<div class="barra">
<h3 align="left"> Instituições Parceiras </h3>
</div>


	
	
	<tr>
	<td><img id="abrigoAnimal" src="img/abrigo.jpg">
	<p id="abrigoAnimalParagrafo"> Abrigo Animal </p></td>
	
	
	
	<td><img id="frada" src="img/Frada.jpg">
	<p id="fradaParagrafo"> Frada </p></td>
	</tr>
	
	
	

<br>
<?php
include("rodapeGeral.php");
?>