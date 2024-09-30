<?php
include ("cabecalhoGeral.php");
$id=$_GET['idusuario'];

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homeUsuario.php?idusuario=<?php echo $id ?>">Home</a></li>
      
	  <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adotar Animal<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="adotaDogsUsuario.php?idusuario=<?php echo $id ?>">Cachorro</a></li>
          <li><a href="adotaCatUsuario.php?idusuario=<?php echo $id ?>">Gato</a></li>
        </ul>
      </li>
	  
	  <li> <a href="formCadastroAnimais.php?idusuario=<?php echo $id ?>">Doar Animal</a> </li>
	  
	 
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
	  <?php
	  include("conexao.php");
	  
	  $id= $_GET['idusuario'];
	  $comando="SELECT * FROM usuario WHERE idusuario={$id}";
	  $resultado=mysqli_query($conexao,$comando);
	  $usuario=mysqli_fetch_assoc($resultado);
	  $nomeUsuario=$usuario['nome_usuario'];
	  
	  ?>
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span><?php echo $nomeUsuario; ?></a>
	  <ul class="dropdown-menu">
          <li><a href="verDadosUsuario.php">Ver dados</a></li>
		  
          <li><a href="logout.php">Sair</a></li>
        </ul>
	  </li>
	 
    </ul>
  </div>
</nav>