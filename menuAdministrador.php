<?php

include ("cabecalhoGeral.php");

?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homeAdm.php">Home</a></li>
      
	  <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Animais Cadastrados<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Consultar</a></li>
          
        </ul>
      </li>
	  
	  <li><a href="formCadastroEventos.php">Eventos</a></li>
	  
	  <li><a href="formCadastroOngs.php">ONG's</a></li>
	  
	  <li><a href="formConsultaCliente.php">Usuários</a></li>
	  
    </ul>
	
   <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Administrador</a>
	  <ul class="dropdown-menu">  
          <li><a href="logout.php">Sair</a></li>
        </ul>
	  </li>
    </ul>
  </div>
</nav>
</body>
</html>