<?php
    session_start();
    include_once("../Cadastro/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/homepage.css">
    <title>Listar voos</title>
</head>
<body>
    
    <div class="header">
        <h1 class="nome"><a href="../index.php"><i class="fa-solid fa-plane-departure"></i></a>FourFLY</h1>
    </div>

    <h1>Voos</h1>
    <p>
      <?php

        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        //Setar a quantidade de itens por pagina 
        $qnt_result_pg = 3; 

        //Caucular o inicio visualização
        $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        if($_SESSION['cidades']=="tokyo"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'JP' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="eua"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'EU' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="londres"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'UK' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="saopaulo"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'SP' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="riograndedosul"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'RS' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="ceara"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'CE' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="amazonas"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'AM' LIMIT $inicio, $qnt_result_pg";
        }elseif($_SESSION['cidades']=="riodejaneiro"){
            $result_adms = "SELECT * FROM voos WHERE destino = 'RJ' LIMIT $inicio, $qnt_result_pg";
        }else{
            $result_adms = "SELECT * FROM voos WHERE destino = 'BA' LIMIT $inicio, $qnt_result_pg";
        }

        $resultado_adms = mysqli_query($conn, $result_adms);
        
        while($row_adm = mysqli_fetch_assoc($resultado_adms)){ 
            echo "Aeronave: ". $row_adm['voo']. "<br>";
            echo "<h4 class='codigovoo'>*Copie o código do voo</h4>
                  <style>
                  .codigovoo{
                    color: gray;
                    font-size: 12px;
                    }
                  </style>              
                ";
            echo "Partida: ". $row_adm['partida']. "<br>";
            echo "Destino: ". $row_adm['destino']. "<br>";
            echo "Data: ". $row_adm['datas']. "<br>";
            echo "Horário: ". $row_adm['horario']. "<br>";
            echo "Aeroporto de Saída: ". $row_adm['aeroportoS']. "<br>";
            echo "Aeroporto de Chegada: ". $row_adm['aeroportoC']. "<br>";
            echo "Preço: R$". $row_adm['preco']. "<br>";
            
            
            
            echo "  <a class='compra' href='../Compra/registroCartao.php?id=".$row_adm['id']."'>Comprar</a><br>";
            
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
        echo "<a href='lista_voos.php?pagina=1'>Primeira&nbsp;</a>";

        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
            if($pag_ant >= 1){
                echo "<a href='lista_voos.php?pagina=$pag_ant'>&nbsp;$pag_ant&nbsp;</a>";
            }
        }

        echo "$pagina";

        for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
            if($pag_dep <= $quantidade_pg){
                echo "<a href='lista_voos.php?pagina=$pag_dep'>&nbsp;$pag_dep&nbsp;</a>";
            }
        }

        echo "<a href='lista_voos.php?pagina=$quantidade_pg'>&nbsp;Última</a>";

      ?>
    </p>
    
  
</body>
</html>