<?php

include("conexao.php");
include("menuAdministrador.php");

$nome=$_POST['nomeOng'];
$email=$_POST['emailOng'];

$comando="INSERT INTO ong (nome_ong, email, ativo) VALUES ('{$nome}', '{$email}', 1)";

$resultado = mysqli_query($conexao, $comando);

//para mostrar o errro que o código vai apresentar.
$msgErro=mysqli_error($conexao);

if($resultado){
		
		echo "<script> alert('ONG cadastrada com sucesso!'); location.href='formCadastroOngs.php'; </script>";
		
	}else{
		
		echo "<center><p class='alert-danger'> Erro ao cadastrar Ong: {$msgErro} </p>
		<a href='formCadastroOngs.php'> Clique aqui para voltar </a></center>";
	}

?>