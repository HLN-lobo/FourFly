<?php
session_start();

// INCLUDE - Para incluir a conexão e ONCE para ser incluido somente uma vez
include_once("../Cadastro/conexao.php");

//Recebendo os dados do formulário usar : filter 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_POST,'nascimento',FILTER_SANITIZE_STRING);
$numeroCartao = filter_input(INPUT_POST,'numero',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$cvv = filter_input(INPUT_POST,'cvv',FILTER_SANITIZE_STRING);
$vencimento = filter_input(INPUT_POST,'venc',FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
$cadastro = $_POST['cadastro'];

$result_usuario = "INSERT INTO registroc (Nome, Nascimento, Numero, CPF, CVV, Vencimento, Endereço, CEP) VALUES  ('$nome','$nascimento','$numeroCartao','$cpf','$cvv','$vencimento','$endereco','$cep')";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//Verificar se foram incluidos com sucesso no banco de dados

if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<p> Cartão registrado!</p>";
  header("Location:../Compra/comprar.php");
}else{
  $_SESSION['msg'] = "<p> Cartão não cadastrado! </p>";
  header("Location:registroCartao.php");
}

?>

