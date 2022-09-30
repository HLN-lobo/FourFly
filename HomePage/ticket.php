<?php
session_start();
include_once("../Cadastro/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/homepage.css">
    <title>Ticket</title>
</head>
<body>
    <div class="header">
        <h1 class="nome"><a href="../index.php"><i class="fa-solid fa-plane-departure"></i></a>FourFLY</h1>
        <div class="item2">
            <a href="../HomePage/destroy.php" class="texto"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
</body>
</html>

<?php

foreach($_SESSION['compras'] as $codigo){
    $result_adms = "SELECT * FROM voos WHERE voo = '$codigo'";
    $resultado_adms = mysqli_query($conn, $result_adms);
    
    while($row_adm = mysqli_fetch_assoc($resultado_adms)){
    
        echo "Data: ". $row_adm['datas']. "<br>";
        echo "Horário: ". $row_adm['horario']. "<br>";
        echo "Aeroporto de Saída: ". $row_adm['aeroportoS']. "<br>";
        echo "Aeroporto de Chegada: ". $row_adm['aeroportoC']. "<br>";
        echo "Preço:  R$". $row_adm['preco']. "<br><hr>";   
    }
}


?>