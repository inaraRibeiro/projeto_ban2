<?php
include("conexao.php");
include("menuAdministrador.php");
//Capturandoos dados do cliente para edição no banco de dados

$nome= $_POST['nomeEvento'];
$data= $_POST['dataEvento'];
$horas = $_POST['horarioEvento'];
$local= $_POST['localEvento'];
$end= $_POST['endEvento'];
$tel= $_POST['telEvento'];
$desc= $_POST['descEvento'];
$id = $_POST['id'];

$comando="UPDATE eventos SET nome_evento='{$nome}', data_evento='{$data}', horario_evento='{$horas}',
local_evento = '{$local}', endereco_evento='{$end}', telefone_evento='{$tel}', descricao='{$desc}' WHERE ideventos={$id}";

$resultado = mysqli_query($conexao, $comando);

$msg = mysqli_error($conexao);

if($resultado){
	
	echo "<script> alert('Evento alterado com sucesso!'); location.href='formCadastroEventos.php'; </script>";
}else{
	
	header("Location: erroAlteracao.php?erro={$msg}");
}





?>