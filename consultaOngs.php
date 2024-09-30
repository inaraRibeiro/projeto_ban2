<?php

function consultaOngs($conexao,$nomeOng){
//array para guardar os serviços retornados, pois podemos ter vários.	
$ongs=array();
	
$comando="SELECT * FROM ong WHERE nome_ong LIKE '%{$nomeOng}%' and ativo=1";
	
$resultado=mysqli_query($conexao,$comando);
$linhas=mysqli_num_rows($resultado);

if($linhas==0){
	echo "<tr><center><td colspan='3'>Nenhuma ONG encontrada</td></tr>";
}else{
	
	while($guardaOng = mysqli_fetch_assoc($resultado))
	{
		array_push($ongs,$guardaOng);
		
	}
}
return $ongs;

}

?>