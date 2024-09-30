<?php

include ("cabecalhoGeral.php");

?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      
	  <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adotar Animal<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cachorro</a></li>
          <li><a href="#">Gato</a></li>
        </ul>
      </li>
	  
	  <li> <a href="#" onclick="funcaoAlert()" >Doar Animal</a> </li><!--FAZER UM ALERT DIZENDO AO USUÁRIO QUE ELE DEVE ENTRAR OU CADASTRAR-SE NO SITE PRIMEIRO -->
        
     
	  
	    
      <li><a href="formAjudenos.php">Ajude-nos</a></li>
	  
	  <li><a href="formContato.php">Contato</a></li><!--Rolar a tela para o contato -->
	  
	  <li class="redesSociais">
		<img src="img/face.png" class="redes"/>
		
		<img src="img/insta.png" class="redes"/>
		<img src="img/twitter.png" class="redes"/>
	</li>
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->

      <li>
	  <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Entre ou cadastre-se</a>
	  
	  </li>
	 
    </ul>
  </div>
</nav>