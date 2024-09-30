<?php
	include("conexao.php");
	
	$nome= $_POST['nomeAnimal'];
	$cor= $_POST['corAnimal'];
	$pelagem= $_POST['pelagemAnimal'];
	$tipo= $_POST['tipoAnimal'];
	$sexo= $_POST['sexoAnimal'];
	$idade= $_POST['idadeAnimal']." ".$_POST['idade'];
	$foto= $_POST['fotoAnimal'];
	$observacoes= $_POST['observacaoAnimal'];
	$id= $_POST['idUsuario'];
	
	
	$comando= "INSERT INTO animais (nome_animal, cor_animal, pelagem_animal, tipo_animal, sexo, idade_animal, foto, observacoes, usuario_idusuario, ativo) 
	VALUES ('{$nome}','{$cor}', '{$pelagem}', '{$tipo}', '{$sexo}', '{$idade}', '{$foto}', '{$observacoes}', {$id}, 1)";
	
	$resultado=mysqli_query($conexao,$comando);
	$msgErro=mysqli_error($conexao);
	
	if($resultado){
		
		echo "<script> alert('Animal cadastrado com sucesso!'); location.href='homeUsuario.php?idusuario={$id}'; </script>";
		
	}else{
		echo "<center><p class='alert-danger'> Erro ao cadastrar animal: {$msgErro} </p>
		<a href='formCadastroAnimais.php'> Clique aqui para voltar </a></center>";
	}

?>