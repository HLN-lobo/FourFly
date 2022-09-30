<?php 

session_start();
include_once("conexao.php");

$chave = $_POST['chave'];
$senha = $_POST['senha'];
$login = $_POST['login'];
  
if(isset($_POST['login'])) {  
  $qun = mysqli_query($conn, " SELECT * from administradores where chave = '$chave' and senha = '$senha' ");

  if (mysqli_num_rows($qun) == 1) {
    $_SESSION['msg_senha'] = "<p>Logado!</p>";
    $_SESSION['funcionario'] = 'trabalhando';
    header("Location:../Administracao/registro_voos.php");
  } else {
    $_SESSION['msg_senha'] = "<p>Login incorreto</p>";
    header("Location:login_adm.php");
  }
}
  
?>