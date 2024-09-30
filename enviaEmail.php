<?php
include("conexao.php");

/*$nome= $_POST['nomePessoa'];
$assunto=$_POST['nomeAssunto'];
$emailPessoa=$_POST['nomeEmail'];
$mensagem=$_POST['mensagem'];

//enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "encontrepetcontato@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From:' . $nome . '<'.$emailPessoa.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $nome, $assunto, $mensagem, $headers);
  if($enviaremail){
  $msg = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo $msg;
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo $mgm;
  }
 */


echo "<script> alert('Mensagem enviada com sucesso!'); location.href='index.php'; </script>" 
  
?>



