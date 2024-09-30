<?php

	include("conexao.php");

	$id = $_POST['id'];
	
	//testar para ver se o id está certo:
	//echo "Estou recebendo o ID: {$id}";
	
	$comando="UPDATE animais SET ativo=0 WHERE idanimais={$id}";
	
	$resultado=mysqli_query($conexao, $comando);
	
	$msgErro=mysqli_error($conexao);
	if($resultado){
	
		echo "<script>
		
		alert('Animal removido com sucesso!');
		
		location.href='formConsultaAnimaisAdm.php';
		
		</script>";
		
	}else{
		
		echo "<script>
		
		alert('Não foi possível remover o cliente: {$msgError}');
		
		location.href='formConsultaAnimaisAdm.php';
		
		</script>";
		
	}

?>