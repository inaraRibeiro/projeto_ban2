<?php
include("conexao.php");
//Capturandoos dados do cliente para edição no banco de dados

$nome= $_POST['nomeUsuario'];
$sobrenome= $_POST['sobrenomeUsuario'];
$rua = $_POST['ruaUsuario'];
$bairro= $_POST['bairroUsuario'];
$num= $_POST['numUsuario'];
$tel= $_POST['telUsuario'];
$cel= $_POST['celUsuario'];
$email= $_POST['emailUsuario'];
$id = $_POST['id'];

$comando="UPDATE usuario SET nome_usuario='{$nome}', sobrenome_usuario='{$sobrenome}', rua='{$rua}',
bairro = '{$bairro}', numero={$num}, telefone='{$tel}', celular='{$cel}', email='{$email}' WHERE idusuario={$id}";

$resultado = mysqli_query($conexao, $comando);

$msg = mysqli_error($conexao);

if($resultado){
	
	echo "<script> alert('Usuario Alterado com sucesso!'); location.href='formConsultaCliente.php'; </script>"; //redirecionar o usuário para a index com ele já logado.
}else{
	
	header("Location: erroAlteracao.php?erro={$msg}");
}





?>