<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../assets/cadastroCartao.css">
    <script src="https://kit.fontawesome.com/fae369a468.js" crossorigin="anonymous"></script>
    <title>Cadastro cartão BCD</title>
</head>
<body>
  
    <main class="container">
        <h2>Cadastro</h2>
        <p id="erro"><?php
        
        if (isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        ?>
        </p>
        <form action="processa_registroCartao.php" method="post">
            <h3>Informações pessoais</h3>
            <div class="input-field">
                <i class="fa-regular fa-circle-user"></i>
                <input required type="text" name="nome" id="nome" required
                placeholder="Digite seu nome"> 
            </div>
            
            <div class="input-field">
                <i class="fa-solid fa-calendar-days"></i>
                <input required type="text" name="nascimento" id="nascimento" required
                placeholder="Data de nascimento" >
            </div>
            
            <div class="input-field"><i class="fa-solid fa-id-card"></i>
                <input required type="text" name="cpf" id="cpf" required
                placeholder="Digite seu CPF">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-credit-card"></i>
                <input required type="text" name="numero" id="numero" minlength ="13" maxlength="16" required
                placeholder="Número do Cartão">
            </div>

            <div class="input-field"><i class="fa-solid fa-lock"></i>
                <input required type="text" name="cvv" id="cvv" minlength ="3" maxlength="3" required
                placeholder="Código de Segurança">
            </div>

            <div class="input-field"><i class="fa-solid fa-calendar-days"></i>
                <input required type="text" name="venc" id="venc" required
                placeholder="Vencimento">
            </div>
            
            <h3>Informações de localidade</h3>
            <div class="input-field">
                <i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="endereco" id="endereco" required
                placeholder="Digite seu endereço">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="cep" id="cep" required
                placeholder="CEP">
            </div>

            <input type="submit" value="Cadastrar" name="cadastro" id="cadastro">
        </form>

        <div class="footer">
            <a href="../Compra/cartao.php">Já possui cartão cadastrado?</a>
        </div>
    </main>

</body>
</html>