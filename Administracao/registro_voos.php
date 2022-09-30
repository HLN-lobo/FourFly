<?php
session_start();
if(isset($_SESSION['funcionario'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/registro.css">
    <title>Document</title>
</head>
<body>
        <?php
            if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>


    <div class="header">
        <h1 class="nome"><a href="../index.php"><i class="fa-solid fa-plane-departure"></i></a>FourFLY</h1>   
        <div class="item2">
            <a href="lista_voos.php" class=""><i class="fa-sharp fa-solid fa-plane"></i></a>
            <a href="../HomePage/destroy.php" class="texto"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>

    <div class="container">
        <div class="contact-box">
            <div class="right">
                <h1 class="">Administração</h1>
                <h1 class="">Registrar voos</h1>
                <form action="processa_registro.php" method="post">
                    
                    <label>Voo:</label>
                    <input class="field" type="text" name="voo" placehoder="Digite o nome do Voo">
                
                    <label for="">De:</label>
                    <select name="partida" class="field" placeholder="Partida">
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="CE">Fortaleza</option>
                        <option value="AM">Manaus</option>
                        <option value="RS">Porto Alegre</option>
                        <option value="BA">Salvador</option>
                        <option value="UK">Londres</option>
                        <option value="JP">Tokyo</option>
                        <option value="EUA">Los Angeles</option>
                    </select>

                    <label for="">Para:<label>
                    <select name="destino" class="field" placeholder="Partida">
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="CE">Fortaleza</option>
                        <option value="AM">Manaus</option>
                        <option value="RS">Porto Alegre</option>
                        <option value="BA">Salvador</option>
                        <option value="UK">Londres</option>
                        <option value="JP">Tokyo</option>
                        <option value="EUA">Los Angeles</option>
                    </select>

                    <label>Aeroporto de Saída:</label>
                    <select name="aeroportoS" class="field" placeholder="Partida">      
                        <optgroup label="São Paulo">
                            <option value="CGH - Congonhas">Aeroporto de Congonhas</option>
                            <option value="GRU - Guarulhos">Internacional de Guarulhos</option>
                        </optgroup>
                        <optgroup label="Ceará">
                            <option value="FOR - Fortaleza">Internacional de Fortaleza</option>
                            <option value="JDO - Juazeiro">Aeroporto de Juazeiro</option>
                        </optgroup>
                        <optgroup label="Rio de Janeiro">
                            <option value="SDU - Santos Dumont">Interncaional Santos Dumont</option>
                            <option value="GIG - Rio Galeão">Aeroporto Rio Galeão</option>
                        </optgroup>
                        <optgroup label="Amazonas">
                            <option value="MAO - Manaus">Internacional de Manaus</option>
                            <option value="TBT - Tabatinga">Internacional de Tabatinga</option>
                        </optgroup>
                        <optgroup label="Rio Grande do Sul">
                            <option value="POA - Porto Alegre">Internacional de Porto Alegre</option>
                            <option value="BGX - Bagé">Internacional de Bagé</option>
                        </optgroup>
                        <optgroup label="Bahia">
                            <option value="SSA - Salvador">Internacional de Salvador</option>
                            <option value="BPS - Porto Seguro">Internacional de Porto Seguro</option>
                        </optgroup>
                        <optgroup label="Londres">
                            <option value="LCY - Londres">Internacional de Londres</option>
                        </optgroup>
                        <optgroup label="Tokyo">
                            <option value="HND - Tokyo">Internacional de Tokyo</option>
                        </optgroup>
                        <optgroup label="Los Angeles">
                            <option value="LAX - Los Angeles">Internacional de Los Angeles</option>
                        </optgroup>
                    </select>

                    <label>Aeroporto de Chegada:</label>
                    <select name="aeroportoC" class="field" placeholder="Partida">    
                        <optgroup label="São Paulo">
                            <option value="CGH - Congonhas">Aeroporto de Congonhas</option>
                            <option value="GRU - Guarulhos">Internacional de Guarulhos</option>
                        </optgroup>
                        <optgroup label="Ceará">
                            <option value="FOR - Fortaleza">Internacional de Fortaleza</option>
                            <option value="JDO - Juazeiro">Aeroporto de Juazeiro</option>
                        </optgroup>
                        <optgroup label="Rio de Janeiro">
                            <option value="SDU - Santos Dumont">Interncaional Santos Dumont</option>
                            <option value="GIG - Rio Galeão">Aeroporto Rio Galeão</option>
                        </optgroup>
                        <optgroup label="Amazonas">
                            <option value="MAO - Manaus">Internacional de Manaus</option>
                            <option value="TBT - Tabatinga">Internacional de Tabatinga</option>
                        </optgroup>
                        <optgroup label="Rio Grande do Sul">
                            <option value="POA - Porto Alegre">Internacional de Porto Alegre</option>
                            <option value="BGX - Bagé">Internacional de Bagé</option>
                        </optgroup>
                        <optgroup label="Bahia">
                            <option value="SSA - Salvador">Internacional de Salvador</option>
                            <option value="BPS - Porto Seguro">Internacional de Porto Seguro</option>
                        </optgroup>
                        <optgroup label="Londres">
                            <option value="LCY - Londres">Internacional de Londres</option>
                        </optgroup>
                        <optgroup label="Tokyo">
                            <option value="HND - Tokyo">Internacional de Tokyo</option>
                        </optgroup>
                        <optgroup label="Los Angeles">
                            <option value="LAX - Los Angeles">Internacional de Los Angeles</option>
                        </optgroup>
                    </select>
                    
                    <label>Data:</label>
                    <input class="field" type="date" name="datas">

                    <label>Horário:</label>
                    <input class="field" type="time" name="horario">

                    <label>Preço: R$</label>
                    <input class="field" type="text" name="preco">

                    <input class="btn" type="submit" value="Registrar">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
}else{
    header("Location: ../index.php");
}
?>