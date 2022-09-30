<?php
session_start();

if(isset($_SESSION['cliente'])){

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/homepage.css">
    <title>Visitantes</title>
</head>
<body>
      
    <?php
    if(isset($_SESSION['ticket'])){
    ?>
    <div class="header">
        <h1 class="nome"><i class="fa-solid fa-plane-departure"></i>FourFLY</h1>
        <div class="item2">
            <a href="./HomePage/destroy.php" class="texto"><i class="fa-solid fa-right-from-bracket"></i></a>
            <a href="./HomePage/ticket.php" class="texto"><i class="fa-solid fa-ticket"></i></a>
        </div>
    </div>
    <?php
    }else{
    ?>
    <div class="header">
        <h1 class="nome"><i class="fa-solid fa-plane-departure"></i>FourFLY</h1>
        <div class="item2">
            <a href="./HomePage/destroy.php" class="texto"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>
    <?php
    }
    ?>

    <section action="lista_passagens.php" method="POST" class="container">  
        <div class="card">
            <img src="./HomePage/img/morumbi.jpg" alt="Estádio Morumbi">
            <p class="card-p" name="SP">São Paulo</p>
            <a href="./Cidade/sp.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/maracana.jpg" alt="Estádio Maracanã">
            <p class="card-p">Rio de Janeiro</p>
            <a href="./Cidade/rj.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        
        <div class="card">
            <img src="././HomePage/img/fontenova.jpg" alt="Estádio Fonte Nova">
            <p class="card-p">Salvador</p>
            <a href="./Cidade/ba.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/arenaamazonia.jpg" alt="Arena Amazonas">
            <p class="card-p">Manaus</p>
            <a href="./Cidade/am.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/castelao.jpg" alt="Estádio Castelão">
            <p class="card-p">Fortaleza</p>
            <a href="./Cidade/ce.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/beirario.jpg" alt="Estádio Beira Rio">
            <p class="card-p">Porto Alegre</p>
            <a href="./Cidade/rs.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/wembley.jpg" alt="Wembley Stadium">
            <p class="card-p">Londres, UK</p>
            <a href="./Cidade/londres.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/tokyostadium.jpg" alt="Ajinomoto Stadium">
            <p class="card-p">Tokyo, JP</p>
            <a href="./Cidade/tokyo.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/la.jpg" alt="Dignity Health Sports Park">
            <p class="card-p">Los Angeles, EUA</p>
            <a href="./Cidade/eua.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
</body>
</html>

<?php

}else{

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fc5a314633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/homepage.css">
    <title>Visitantes</title>
</head>
<body>
      
    <div class="header">
        <h1 class="nome"><i class="fa-solid fa-plane-departure"></i>FourFLY</h1>
        <div class="item2">
            <a href="./Login_ADM/login_adm.php"  class="texto"><i class="fa-sharp fa-solid fa-clipboard-user"></i></a>
            <a href="./Login_Cliente/login_cliente.php"  class="texto"><i class="fa-regular fa-circle-user"></i></a>
        </div>
    </div>

    <section class="container">  
        <div class="card">
            <img src="./HomePage/img/morumbi.jpg" alt="Estádio Morumbi">
            <p class="card-p">São Paulo, SP</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/maracana.jpg" alt="Estádio Maracanã">
            <p class="card-p">Rio de Janeiro, RJ</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
        
        <div class="card">
            <img src="./HomePage/img/fontenova.jpg" alt="Estádio Fonte Nova">
            <p class="card-p">Salvador, BA</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/arenaamazonia.jpg" alt="Arena Amazonas">
            <p class="card-p">Manaus, AM</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/castelao.jpg" alt="Estádio Castelão">
            <p class="card-p">Fortaleza, CE</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/beirario.jpg" alt="Estádio Beira Rio">
            <p class="card-p">Porto Alegre, RS</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/wembley.jpg" alt="Wembley Stadium">
            <p class="card-p">Londres, UK</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/tokyostadium.jpg" alt="Ajinomoto Stadium">
            <p class="card-p">Tokyo, JP</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="card">
            <img src="./HomePage/img/la.jpg" alt="Dignity Health Sports Park">
            <p class="card-p">Los Angeles, USA</p>
            <a href="./Login_Cliente/login_cliente.php" class="card-a"><i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>
</body>
</html>

<?php
}
?>

