<?php
session_start();

// INCLUDE - Para incluir a conexão e ONCE para ser incluido somente uma vez
include_once("../Cadastro/conexao.php");

//Recebendo os dados do formulário usar : filter 

$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$voo = filter_input(INPUT_POST,'codigo',FILTER_SANITIZE_STRING);
$numeroCartao = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
$cvv = filter_input(INPUT_POST,'cvv',FILTER_SANITIZE_STRING);
$cadastro = $_POST['cadastro'];

$resultado = "SELECT COUNT(*) AS 'Contador' FROM compras WHERE Voo = '$voo'";
$codigo = mysqli_query($conn, $resultado);
$row = mysqli_fetch_assoc($codigo);

if($row['Contador'] < 100){
  $result_usuario = "INSERT INTO compras (CPF, Voo, NúmeroC, CVV) VALUES ('$cpf','$voo','$numeroCartao','$cvv')";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
}else{
  $_SESSION['mensagem'] = "<p>Viagem esgotada!</p>";
  header("Location:confirmaCompra.php");
}

  if(mysqli_insert_id($conn)){
    $_SESSION['mensagem'] = "<p>Compra efetuada!</p>";
    array_push($_SESSION['compras'],$voo);
    $_SESSION['ticket'] = "liberado";
    header("Location:../index.php");
  }else{
    $_SESSION['mensagem'] = "<p>Viagem esgotada!</p>";
    header("Location:confirmaCompra.php");
  }


?>
