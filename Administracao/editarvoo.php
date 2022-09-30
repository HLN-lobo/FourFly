<?php
    session_start();

    if(isset($_SESSION['funcionario'])){
    include_once("../Cadastro/conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM voos WHERE id = '$id'";
    $resultado_usuario = mysqli_query($conn,$result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/registro.css">
    <title>Editar voos</title>
</head>
<body>
    
    <div class="header">
        <h1><i class="fa-solid fa-plane-departure"></i>FourFLY</h1>    
        <p class="">Administração</p>
        <div class="item2">
          <a href="lista_voos.php">Lista de voos</a>  
        </div>
    </div>

    <h1>Editar Voo</h1>

    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        
            //unset: destroi o conteudo da variavel dps de mostrar ela na tela, deixa ela vazia
            unset($_SESSION['msg']);
        }
    ?>

    <form action="processa_editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">

        <label>Data:</label>
        <input type="date" name="datas" value="<?php echo $row_adm['datas']; ?>"><br><br>
        
        <label>Horário:</label>
        <input type="time" name="horario" value="<?php echo $row_adm['horario']; ?>"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>
<?php
}else{
    header("Location: ../index.php/");
}
?>