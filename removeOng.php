<?php

	include("conexao.php");

	$id = $_POST['id'];
	
	//testar para ver se o id está certo:
	//echo "Estou recebendo o ID: {$id}";
	
	$comando="UPDATE ong SET ativo=0 WHERE idong={$id}";
	
	$resultado=mysqli_query($conexao, $comando);
	
	$msgErro=mysqli_error($conexao);
	if($resultado){
	
		echo "<script>
		
		alert('ONG removida com sucesso!');
		
		location.href='formCadastroOngs.php';
		
		</script>";
		
	}else{
		
		echo "<script>
		
		alert('Não foi possível remover o cliente: {$msgError}');
		
		location.href='formCadastroOngs.php';
		
		</script>";
		
	}

?>