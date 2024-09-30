<?php
	include("conexao.php");
	include("menuAdministrador.php");
	
	$nome= $_POST['nomeCliente'];
	$sobrenome= $_POST['sobrenomeCliente'];
	$rua= $_POST['ruaCliente'];
	$bairro= $_POST['bairroCliente'];
	$num= $_POST['numeroCliente'];
	$tel= $_POST['telCliente'];
	$cel= $_POST['celCliente'];
	$email= $_POST['emailCliente'];
	
	
	$user= $_POST['userCliente'];
	$senha= $_POST['senhaCliente'];
	
	$comandoLogin= "INSERT INTO login (user, senha, nivel) VALUES ('{$user}', '{$senha}', 2)";
	$resultadoLogin= mysqli_query($conexao, $comandoLogin);
	
	$comando2= "SELECT * FROM login ORDER BY idlogin desc limit 1";
	$resultado2=mysqli_query($conexao,$comando2);
	$loginRetornado= mysqli_fetch_assoc($resultado2);
	$id= $loginRetornado['idlogin'];
	echo $id;
	
	
	
	
	$comando= "INSERT INTO usuario (nome_usuario, sobrenome_usuario, rua, bairro, numero, telefone, celular, email, login_idlogin, ativo) 
	VALUES ('{$nome}','{$sobrenome}','{$rua}', '{$bairro}', '{$num}', '{$tel}', '{$cel}','{$email}',{$id}, 1)";
	
	$resultado=mysqli_query($conexao,$comando);
	
	$msgErro=mysqli_error($conexao);
	
	if($resultado){
		
		echo "<script> alert('Usuário cadastrado com sucesso!'); location.href='login.php'; </script>";
		
	}else{
		echo "<center><p class='alert-danger'> Erro ao cadastrar! Tente novamente. {$msgErro} </p>
		<a href='formCadastroCliente.php'> Clique aqui para voltar </a></center>";
	}
	

?>