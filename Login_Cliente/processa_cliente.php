<?php

    session_start();
    include_once("conexao.php");

    $email = $_POST['username'];
    $senha = $_POST['password'];
    $login = $_POST['cadastro'];

    if (isset($login)) {
       $verifica =  mysqli_query($conn, "SELECT * FROM cadastrocli WHERE email = '$email' AND senha = '$senha'" );
        if (mysqli_num_rows($verifica) <= 0) {
            $_SESSION['msg'] = "<p>Senha ou usuario incorretos</p>";
            header("Location: login_cliente.php");
        }else{
            $_SESSION['msg'] = "<p>Login efetuado com sucesso</p>";
            $_SESSION['cliente'] = 'logado';
            header("Location: ../index.php");
        }

        $_SESSION['compras'] = array();
    }
?>


