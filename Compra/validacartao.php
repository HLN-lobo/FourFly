<?php 

session_start();
include_once("../Cadastro/conexao.php");

$cpf = $_POST['cpf'];
$numeroCartao = $_POST['numero'];
$cvv = $_POST['cvv'];
  
if(isset($_POST['cpf'])) {  
  $qun = mysqli_query($conn, " SELECT * from registroc where CPF = '$cpf' and Numero = '$numeroCartao' and CVV = '$cvv'");

  if (mysqli_num_rows($qun) == 1) {
    header("Location:../Compra/confirmaCompra.php");
  } else {
    $_SESSION['msg_senha'] = "<p>Cartão não encontrado!</p>";
    header("Location:validacartao.php");
  }
}
  
?>