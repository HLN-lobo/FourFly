<?php
    session_start();

    if(isset($_SESSION['funcionario'])){

    include_once("../Cadastro/conexao.php");

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    if(!empty($id)){
        $result_usuario = "DELETE FROM voos WHERE id='$id'";
        $resultado_usuario  = mysqli_query($conn, $result_usuario);
        if(mysqli_affected_rows($conn)){
            $_SESSION['msg'] = "<p style='color:blue;'>Voo cancelado com sucesso!</p>";
            header("Location:lista_voos.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Não foi possível cancelar o voo!</p>";
            header("Location:lista_voos.php");
        }
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Selecione o voo que deseja cancelar</p>";
        header("Location:lista_voos.php");
    }
?>      
<?php
}else{
    header("Location: ./index.php");
}
?>