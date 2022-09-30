<?php
   session_start();
   if(isset($_SESSION['funcionario'])){
   include_once("../Cadastro/conexao.php");
   
   $id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
   $data = filter_input(INPUT_POST,'datas',FILTER_SANITIZE_STRING);
   $horario = filter_input(INPUT_POST,'horario',FILTER_SANITIZE_STRING);

   $result_adms = "UPDATE voos SET datas='$data', horario='$horario' WHERE id='$id'";
   $resultado_adms = mysqli_query($conn, $result_adms);

   if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p>Voo editado com sucesso</p>";
        header("Location: lista_voos.php");
   }else{
        $_SESSION['msg'] = "<p>Voo não foi editado</p>";
        header("Location: lista_voos.php?id=$id");
   }
?>
<?php
}else{
    header("Location: ../index.php");
}
?>