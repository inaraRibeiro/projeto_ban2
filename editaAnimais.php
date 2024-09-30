<?php 
include("conexao.php");

//guardando o id do usuario que está vindo por get para poder fazer o redirecionamento.


//------------------------------------------------------------------------------------------------------------------------------------------------------------
$nome_animal=$_POST['nomeAnimal'];
$idade=$_POST['idadeAnimal'];
$cor=$_POST['corAnimal'];
$pelagem=$_POST['pelagemAnimal'];
$tipo=$_POST['tipoAnimal'];
$sexo=$_POST['sexoAnimal'];
$foto=$_POST['fotoAnimal'];
$descricao=$_POST['descricaoAnimal'];
$id=$_POST['id'];

$nome_tutuor=$_POST['nomeUser'];
$telefone_tutor=$_POST['telefoneUser'];
$email_tutor=$_POST['emailUser'];


$comando="SELECT * FROM animais WHERE idanimais={$id}";
$resultado=mysqli_query($conexao,$comando);
$animalRetornado=mysqli_fetch_assoc($resultado);
$idUser=$animalRetornado['usuario_idusuario'];


$comando2="UPDATE animais SET  nome_animal='{$nome_animal}', idade_animal='{$idade}', cor_animal='{$cor}', pelagem_animal='{$pelagem}', tipo_animal='{$tipo}', sexo='{$sexo}', foto='{$foto}', observacoes='{$descricao}' WHERE idanimais={$id}";
$resultado2=mysqli_query($conexao,$comando2);


$comando3="UPDATE usuario SET  nome_usuario='{$nome_tutuor}', telefone='{$telefone_tutor}', email='{$email_tutor}' WHERE idusuario={$idUser}";
$resultado3=mysqli_query($conexao,$comando3);

$msg = mysqli_error($conexao);

if($resultado2 && $resultado3){
	
	echo "<script> alert('Animal Alterado com sucesso!'); location.href='homeUsuario.php?idusuario={$animalRetornado['usuario_idusuario']}'; </script>"; 
}else{
	
	header("Location: erroAlteracao.php?erro={$msg}");
	
	echo $msg;
}






















?>