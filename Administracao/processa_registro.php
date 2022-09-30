<?php
   session_start();
   if(isset($_SESSION['funcionario'])){
   
   //INCLUDE - para incluir a conexão e ONCE para ser incluido somente uma vez

    include_once("../Cadastro/conexao.php");

    /*
    Recebendo os dados do formulário - usar: FILTER
    */
    
    // FILTER_SANITIZE_... serve para limpar os dados da varialvel que vem do formulario
    $voo = filter_input(INPUT_POST, 'voo', FILTER_SANITIZE_STRING);
    $partida = filter_input(INPUT_POST, 'partida', FILTER_SANITIZE_STRING);
    $destino = filter_input(INPUT_POST, 'destino', FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST,'datas', FILTER_SANITIZE_STRING);
    $horario = filter_input(INPUT_POST,'horario', FILTER_SANITIZE_STRING);
    $aeroportoS = filter_input(INPUT_POST, 'aeroportoS', FILTER_SANITIZE_STRING);
    $aeroportoC = filter_input(INPUT_POST, 'aeroportoC', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);


    $result_usuario = "INSERT INTO voos (voo, partida, destino, datas, horario, aeroportoS, aeroportoC, preco) VALUES ('$voo','$partida','$destino','$data','$horario','$aeroportoS','$aeroportoC','$preco')";
    $resultado_usuario = mysqli_query($conn,$result_usuario);

    //verificar se foram inseridos com sucesso no banco de dados

    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p> Voo registrado com SUCESSO </p>";
        header("Location: registro_voos.php ");
    }else{
        $_SESSION['msg'] = "<p> O voo não foi registrado </p>";
        header("Location: registro_voos.php");
    }

?>
<?php
}else{
    header("Location: ../index.php");
}
?>
