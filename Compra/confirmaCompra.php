<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/cliente.css">
    <script src="https://kit.fontawesome.com/fae369a468.js" crossorigin="anonymous"></script>
    <title>Validar Compra </title>
</head>
<body>
    
    <main class="container">
        <h2>Validação</h2>
        <p>
          <?php
        
          if (isset($_SESSION['mensagem'])){
              echo $_SESSION['mensagem'];
              unset($_SESSION['mensagem']);
          }
        ?>
        </p>
        <form action="processa_compra.php" method="post">
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="cpf" id="cpf" minlength="11" maxlength="11"
                placeholder="Digite seu CPF">
                <div class="underline"></div>
            </div>
            <p>*código copiado anteriormente</p>
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="codigo" id="codigo" 
                placeholder="Insira o código do Voo" minlength="6" maxlength="6">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="numero" id="numero" 
                placeholder="Insira o número do cartão" minlength="13" maxlength="16">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="cvv" id="cvv" 
                placeholder="Digite o código de segurança" minlength="3" maxlength="3">
                <div class="underline"></div>
            </div>
            <input type="submit" value="Continue" name="cadastro">
        </form>
    </main>
</body>
</html>