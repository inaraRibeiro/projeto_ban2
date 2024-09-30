<?php
include("cabecalhoGeral.php");
include ('menuUsuario.php');
include("conexao.php");
?>
<div class="barra" >
<h3 align="left">CACHORROS</h3>
</div>

<br>
<center>
<div class="container-fluid">
	<label>Sexo:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>Macho</option>
			<option>Fêmea</option>
	</select>
	
	<label>Cor:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>Beje</option>
			<option>Branco</option>
			<option>Marrom</option>
			<option>Preto</option>
			<option>Mesclado</option>
	</select>
	
	<label>Pelagem:</label>
	<select class="selecionar">
	<option>Todos</option>
		<option>Grande</option>
			<option>Média</option>
			<option>Curta</option>
	</select>

	<input type="submit" class="btn btn-default filtroAdocao" value="Filtrar">

</div>
</center>

<?php

$comando="SELECT * FROM animais WHERE tipo_animal='Cachorro'";
$resultado=mysqli_query($conexao,$comando);
$animais=array();

while($guardaAnimais=mysqli_fetch_assoc($resultado)){
	array_push($animais,$guardaAnimais);
}

foreach($animais as $cadaAnimal){

?>

<div class="container text-center">    
  <div class="row">
	<div class="col-sm-12">
      <div class="wellXI">
    <br><br>
		<img class="img-rounded" src="img/dogs/<?php echo $cadaAnimal['foto'];?>"><br><br>
		<h1 id="h1Dogs" align="center"> <?php echo $cadaAnimal['nome_animal'];?></b></h1><br><p align="center" class="pDogs">
		<b>Idade: </b> <?php echo $cadaAnimal['idade_animal'];?><br>
		<b>Pelagem: </b> <?php echo $cadaAnimal['pelagem_animal'];?><br>
		<b>Cor: </b> <?php echo $cadaAnimal['cor_animal'];?><br>
		<b>Sexo: </b> <?php echo $cadaAnimal['sexo'];?><br>
		<b>Tutor: </b>Thais<br>
		<b>Telefone: </b>(47)3433-5562<br>
		<b>Status:</b> A procura de um lar<br>
	</p>
     </div>
    </div>
    </div>
  </div>
</div>
<?php
}
?>
</table>
<?php
include("rodapeGeral.php");
?>