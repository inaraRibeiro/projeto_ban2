<?php
$idUser=$_POST['id'];

function consultaAnimais($conexao){
//array para guardar os animais retornados, pois podemos ter mais de um(vários).	
$animais=array();
	
$comando="SELECT * FROM animais WHERE usuario_idusuario={$id}";
	
$resultado=mysqli_query($conexao,$comando);




?>