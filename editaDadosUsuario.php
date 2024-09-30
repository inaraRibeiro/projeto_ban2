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
$user=$_POST['userCliente'];
$senha=$_POST['senhaCliente'];
$id = $_POST['id'];

$comando3="SELECT * FROM usuario WHERE idusuario={$id}";
$resultado3=mysqli_query($conexao, $comando3);
$usuario=mysqli_fetch_assoc($resultado3);
$idLogin=$usuario['login_idlogin'];

//comando para alterar os campos da tabela usuario
$comando="UPDATE usuario SET nome_usuario='{$nome}', sobrenome_usuario='{$sobrenome}', rua='{$rua}',
bairro = '{$bairro}', numero={$num}, telefone='{$tel}', celular='{$cel}', email='{$email}' WHERE idusuario={$id}";
echo $comando;
$resultado = mysqli_query($conexao, $comando);

//comando para alterar os campos da tebela login
$comando2="UPDATE login SET user='{$user}', senha='{$senha}' WHERE idlogin={$idLogin}";
$resultado2=mysqli_query($conexao,$comando2);

$msg = mysqli_error($conexao);

if($resultado && $resultado2){
	
	echo "<script> alert('Usuario Alterado com sucesso!'); location.href='homeUsuario.php?idusuario={$id}'; </script>"; //redirecionar o usuário para a index com ele já logado.
}else{
	
	header("Location: erroAlteracao.php?erro={$msg}");
	
}





?>