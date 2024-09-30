<?php
	include("conexao.php");
	include("menuAdministrador.php");
	
	$nome= $_POST['nomeEvento'];
	$data= $_POST['dataEvento'];
	$horario= $_POST['horarioEvento'];
	$local= $_POST['localEvento'];
	$endereco= $_POST['endEvento'];
	$telefone= $_POST['telEvento'];
	$descricao= $_POST['descricaoEvento'];
	$foto= $_POST['fotoEvento'];
	
	$comando= "INSERT INTO eventos (nome_evento, data_evento, horario_evento, local_evento, endereco_evento, telefone_evento, descricao, foto_evento, ativo) 
	VALUES ('{$nome}','{$data}','{$horario}', '{$local}', '{$endereco}', '{$telefone}', '{$descricao}', '{$foto}', 1)";
	
	$resultado=mysqli_query($conexao,$comando);
	
	$msgErro=mysqli_error($conexao);
	
	if($resultado){
		
		echo "<script> alert('Evento cadastrado com sucesso!'); location.href='formCadastroEventos.php'; </script>";
		
	}else{
		echo "<center><p class='alert-danger'> Erro ao cadastrar evento: {$msgErro} </p>
		<a href='formCadastroEventos.php'> Clique aqui para voltar </a></center>";
	}
	
	
?>