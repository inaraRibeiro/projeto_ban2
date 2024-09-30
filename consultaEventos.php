<?php

function consultaEventos($conexao,$nomeEvento){
//array para guardar os serviços retornados, pois podemos ter mais de um(vários).	
$eventos=array();
	
$comando="SELECT * FROM eventos WHERE nome_evento LIKE '%{$nomeEvento}%' and ativo=1";
	
$resultado=mysqli_query($conexao,$comando);
$linhas=mysqli_num_rows($resultado);

if($linhas==0){
	echo "<tr><center><td colspan='8'>Nenhum Evento encontrado</td></tr>";
}else{
	
	while($guardaEvento = mysqli_fetch_assoc($resultado))
	{
		array_push($eventos,$guardaEvento);
		
	}
}
return $eventos;

}

?>