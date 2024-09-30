<?php

function consultaAnimais($conexao,$nomeAnimal){
//array para guardar os animais retornados, pois podemos ter mais de um(vários).	
$animais=array();
	
$comando="SELECT * FROM animais WHERE nome_animal LIKE '%{$nomeAnimal}%' and ativo=1";
	
$resultado=mysqli_query($conexao,$comando);
$linhas=mysqli_num_rows($resultado);

if($linhas==0){
	echo "<tr><center><td colspan='11'><center>Nenhum Animal encontrado</center></td></tr>";
}else{
	
	while($guardaAnimal= mysqli_fetch_assoc($resultado))
	{
		array_push($animais,$guardaAnimal);
		
	}
}
return $animais;

}

?>