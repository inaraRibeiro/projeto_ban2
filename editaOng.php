<?php
include("conexao.php");
include("menuAdministrador.php");
//Capturandoos dados do cliente para edição no banco de dados

$nome= $_POST['nomeOng'];
$email= $_POST['emailOng'];
$id = $_POST['id'];

$comando="UPDATE ong SET nome_ong='{$nome}', email='{$email}' WHERE idong={$id}";

$resultado = mysqli_query($conexao, $comando);

$msg = mysqli_error($conexao);

if($resultado){
	
	echo "<script> alert('ONG alterada com sucesso!'); location.href='formCadastroOngs.php'; </script>";
}else{
	
	header("Location: erroAlteracao.php?erro={$msg}");
}





?>