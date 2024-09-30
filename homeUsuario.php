<?php
$id=$_GET['idusuario'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projeto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!--CSS-->
  <link href="css/style.css" rel="stylesheet">
  <!--Icon-->
  <link rel="icon" href="img\icon1.png">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homeUsuario.php?idusuario=<?php ?>">Home</a></li>
      
	  <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adotar Animal<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="adotaDogsUsuario.php?idusuario=<?php echo $id ?>">Cachorro</a></li>
          <li><a href="adotaCatUsuario.php?idusuario=<?php echo $id ?>">Gato</a></li>
        </ul>
      </li>
	  
	  <li> <a href="formCadastroAnimais.php?idusuario=<?php echo $id ?>">Doar Animal</a> </li><!--Redirecionar o usuário para a tela de cadastro de animais -->
        
     
	  <li><a href="#events">Eventos</a></li><!--Rolar a tela para os eventos -->
	    
	  	  
	  <li><a href="#about">Sobre</a></li><!--Rolar a tela para o sobre -->
	  
	  <li class="redesSociaisUsuario">
		<img src="img/face.png" class="redes"/>
		<img src="img/insta.png" class="redes"/>
		<img src="img/twitter.png" class="redes"/>
	</li>
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
          <li><a href="verDadosUsuario.php?idusuario=<?php echo $id;?>">Ver dados</a></li>
		  <li><a href="verAnimaisCadastradosUsuario.php?idusuario=<?php echo $id;?>">Animais que cadastrei</a></li>
		  
          <li><a href="logout.php">Sair</a></li>
        </ul>
	  </li>
	 
    </ul>
  </div>
</nav>

<div id="banner">
        <img src="img/1.jpg" alt="Image">
        </div>
     
<!--Container 1-->
<div class="barra" id="about">
<h3 align="left" >Sobre</h3>
</div>
<br>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-4">
	<img src="img/sobre.png" alt="Image" id="sobre">
      <div class="well">
    <br><p > O projeto constitui na elaboração de um website que promova a divulgação de animais de estimação para a adoção,
	   visando diminuir a quantidade de cães e gatos abandonados e a super lotação de canis e ONGs responsáveis por esse seguimento.</p>
     </div>
    </div>
	<div class="col-sm-4">
	<img src="img/sobreee.png" alt="Image" id="sobre1">
      <div class="well">
       <br><p>Desenvolver um website intuitivo que facilite a adoção de animais de estimação, 
	   divulgando as pessoas os bichinhos abandonados que precisam de um lar.</p>
      </div>
    </div>
	<div class="col-sm-4">
	<img src="img/sobre2.png" alt="Image" id="sobre2">
      <div class="well">
       <br><p>É comprovado cientificamente que o contato com os bichinhos de estimação libera hormômios do bem como a
	   endorfina que ajudam a reduzir níveis de estresse. 
	   Além disso eles também são aliados na cura de doenças de depressão e o autismo.</p>
      </div>
    </div>
  </div>
</div><br> 

<!--Container 2
<div class="barra" id="events">
<h3 align="left">Eventos</h3>
</div>
<div class="container text-center">    
<br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/evento1.png" class="evento" class="img-responsive" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <img src="img/evento2.png" class="evento" class="img-responsive" alt="Image">    
    </div> 
	<div class="col-sm-4"> 
      <img src="img/evento3.png" class="evento" class="img-responsive" alt="Image">   
    </div>
	 <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
</div><br>-->

<!--Container 2-->
<div class="barra" id="events">
<h3 align="left">Eventos</h3>
</div>
<img src="img/setaEsquerda.png" id="setaEsquerda">
<div class="container text-center">    
<br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/evento1.png" class="evento" class="img-responsive" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <img src="img/evento2.png" class="evento" class="img-responsive" alt="Image">    
    </div> 
	<div class="col-sm-4"> 
      <img src="img/evento3.png" class="evento" class="img-responsive" alt="Image">   
    </div>
   
  </div>
</div>
<img src="img/setaDireita.png" id="setaDireita">
<img src="img/dog.png" id="dog" class="img-responsive">

<!--Footer-->
 <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row"><br>
                    <div class="footer-col col-md-2" align="center">
                      <h4>GERAL</h4>
							<p>Adotar
                            <br>Doar
							<br>Eventos
							<br>Ajude-nos
							<br>Sobre</p>
                    </div>
                    <div class="footer-col col-md-4" align="center">
                        <h4>DEPARTAMENTOS</h4>
							<p>Cachorros
							<br>Gatos</p>
                    </div>
					<div class="footer-col col-md-3" align="center">
                        <h4>ATENDIMENTO</h4>
                        <p>Entre em contato<br>
						Telefones para contato:
						<br>(47)3465-3033
						<br>0800-1188550</p>
                    </div>
					<div class="footer-col col-md-3" align="center">
                        <h4>REDES SOCIAIS</h4>
						<img src="img/face.png" class="redes"/>
						<img src="img/insta.png" class="redes"/>
						<img src="img/twitter.png" class="redes"/>
						
                    </div>
                </div>
            </div>
        </div>
</footer>
</body>
</html>

