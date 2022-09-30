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
    <title>Cartão</title>
</head>
<body>
    
    <main class="container">
        <h2>Cartão</h2>
        <p id="erro"><?php
        
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
        </p>
        <form action="validacartao.php" method="post">
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="cpf" id="cpf" minlength="11" maxlength="11"
                placeholder="Digite seu CPF">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="text" name="numero" id="numero" 
                placeholder="Digite o número" minlength="13" maxlength="16">
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