<?php
    session_start();
    if(isset($_SESSION['funcionario'])){
    include_once("../Cadastro/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/registro.css">
    <title>Listar voos</title>
</head>
<body>
    
    <div class="header">
        <h1 class="nome"><a href="../index.php"><i class="fa-solid fa-plane-departure"></i></a>FourFLY</h1>   
        <div class="item2">
            <a href="registro_voos.php" class="texto"><i class="fa-solid fa-plus"></i></a>
            <a href="../HomePage/destroy.php" class="texto"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>    

    
    <h1>Lista de voos</h1>
    
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }

        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //Setar a quantidade de itens por pagina 
        $qnt_result_pg = 3; 

        //Caucular o inicio visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        $result_adms = "SELECT * FROM voos LIMIT $inicio, $qnt_result_pg";
        $resultado_adms = mysqli_query($conn, $result_adms);
        
        while($row_adm = mysqli_fetch_assoc($resultado_adms)){
            echo "Aeronave: ". $row_adm['voo']. "<br>";
            echo "Partida: ". $row_adm['partida']. "<br>";
            echo "Destino: ". $row_adm['destino']. "<br>";
            echo "Data: ". $row_adm['datas']. "<br>";
            echo "Horário: ". $row_adm['horario']. "<br>";
            echo "Aeroporto de Saída: ". $row_adm['aeroportoS']. "<br>";
            echo "Aeroporto de Chegada: ". $row_adm['aeroportoC']. "<br>";
            echo "Preço: R$". $row_adm['preco']. "<br>";
            
            echo "<a class='acoes' href='editarvoo.php?id=".$row_adm['id']."'>Editar</a>
            <style>
            .acoes { color: blue;}
            </style><br>";
            echo "<a class='acoes' href='cancelarvoo.php?id=".$row_adm['id']."'>Apagar</a><br><hr>";
        }

        //Páginação - Somar a quantidade de usuários
        $result_pg = "SELECT COUNT(id) AS num_result FROM voos";
        $resultado_pg = mysqli_query($conn,$result_pg);
        $row_pg = mysqli_fetch_assoc($resultado_pg);

        //echo $row_pg['num_result'];
        //Quantidade de página
        $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

        //Limitar os links antes depois
        $max_links = 2;
        echo "<a class='acoes' href='lista_voos.php?pagina=1'>Primeira&nbsp;</a>";

        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
                echo "<a class='acoes' href='lista_voos.php?pagina=$pag_ant'>&nbsp;$pag_ant&nbsp;</a>";
            }
        }

        echo "$pagina";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a class='acoes' href='lista_voos.php?pagina=$pag_dep'>&nbsp;$pag_dep&nbsp;</a>";
            }
        }

        echo "<a class='acoes' href='lista_voos.php?pagina=$quantidade_pg'>&nbsp;Última</a>";

    ?>

</body>
</html>
<?php
}else{
    header("Location: ../index.php");
}
?>