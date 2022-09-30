<?php
session_start();

// INCLUDE - Para incluir a conexão e ONCE para ser incluido somente uma vez
include_once("conexao.php");

//Recebendo os dados do formulário usar : filter 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
$trabalho = filter_input(INPUT_POST,'localtrabalho',FILTER_SANITIZE_STRING);
$comercial = filter_input(INPUT_POST,'enderecocomercial',FILTER_SANITIZE_STRING);
$dataNascimento = filter_input(INPUT_POST,'datadenascimento',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);
$rg =  filter_input(INPUT_POST,'rg',FILTER_SANITIZE_STRING);
$dataEmissao = filter_input(INPUT_POST,'datadeemissao',FILTER_SANITIZE_STRING);
$orgaoEmissor = filter_input(INPUT_POST,'orgaoemissor',FILTER_SANITIZE_STRING);
$cadastro = $_POST['cadastro'];

$result_usuario = "INSERT INTO cadastrocli (Nome, Senha, EnderecoCompleto, Telefones, Email, LocalDeTrabalho, EnderecoComercial, DataDeNascimento, CPF, RG, DataDeemissao, UF) VALUES  ('$nome','$senha','$endereco','$telefone','$email','$trabalho','$comercial','$dataNascimento','$cpf','$rg','$dataEmissao','$orgaoEmissor')";

$resultado_usuario = mysqli_query($conn, $result_usuario);


//Verificar se foram incluidos com sucesso no banco de dados

if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<p> Usuário cadastrado com sucesso...</p>";
  header("Location:../Login_Cliente/login_cliente.php");
}else{
  $_SESSION['msg'] = "<p> O usuário não foi cadastrado </p>";
  header("Location:cadastro.php");
}

?>

