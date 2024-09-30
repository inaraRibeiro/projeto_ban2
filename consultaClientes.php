<?php

function consultaClientes($conexao,$nomeUsuario){
//array para guardar os serviços retornados, pois podemos ter mais de um(vários).	
$usuarios=array();
	
$comando="SELECT * FROM usuario WHERE nome_usuario LIKE '%{$nomeUsuario}%' and ativo=1";
	
$resultado=mysqli_query($conexao,$comando);
$linhas=mysqli_num_rows($resultado);

if($linhas==0){
	echo "<tr><center><td colspan='8'>Nenhum Usuário encontrado</td></tr>";
}else{
	
	while($guardaUsuario = mysqli_fetch_assoc($resultado))
	{
		array_push($usuarios,$guardaUsuario);
		
	}
}
return $usuarios;

}

?>