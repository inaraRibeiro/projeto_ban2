<?php

	include("conexao.php");
	
	/* capturando o email e senha informados no formulario */
	
	$email = $_POST['emailLogin'];
	$senha = $_POST['senhaLogin'];
	
	/* guardando em uma variável a instrução que irá consultar se no banco
de dados existe aquele usuário e senha	*/
	
	$comando = "SELECT * FROM login WHERE user='{$email}' AND senha='{$senha}'";
	
	/* executo o comando SQL e guardo o resultado em $resultado */
	
	$resultado=mysqli_query($conexao, $comando);
	
	/* Organizando em forma de array dentro da variável $usuário as informações
 retornadas na linha 17	*/
	
	$login=mysqli_fetch_assoc($resultado);
	
	/* Verificando se no array $usuario existe alguma coisa.
Se dar null, significa que não foi encontrado um email e senha igual aos informados peo formulario */
	
if ($login==null){
	/* Redireciono para o login, passando uma informação (logado) para identificar que o login não foi 
	autenticado e deve-se retornar ao login mostrando uma mensagem */

	echo "Login ou senha inválidos!";

} else if($login['nivel']==1){
	
	/* Verificar se o nível do usuário é 1, que corresponde a administrador */
	
	
		
		header("Location: homeAdm.php?logado=1");	
		
	} else {
		
		$id= $login['idlogin'];
		$comando2= "SELECT * FROM usuario WHERE login_idlogin={$id}";
		$resultado2=mysqli_query($conexao, $comando2 );
		$usuario=mysqli_fetch_assoc($resultado2);
		$idusuario=$usuario['idusuario'];
		
		
		header("Location: homeUsuario.php?idusuario={$idusuario}");
		
	}
	
	// ? = levar junto para a página 
	


?>