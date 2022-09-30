<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../assets/cadastro.css">
    <script src="https://kit.fontawesome.com/fae369a468.js" crossorigin="anonymous"></script>
    <title>Cadastro BCD</title>
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
        <form action="processa_cadastro.php" method="post">
            <h3>Informações pessoais</h3>
            <div class="input-field">
                <i class="fa-regular fa-circle-user"></i>
                <input required type="text" name="nome" id="nome" 
                placeholder="Digite seu nome">
            </div>
            
            <div class="input-field">
                <i class="fa-solid fa-calendar-days"></i>
                <input required type="text" name="datadenascimento" id="datadenascimento" 
                placeholder="Data de nascimento" >
            </div>
            
            <div class="input-field"><i class="fa-solid fa-id-card"></i>
                <input required type="text" name="cpf" id="cpf" 
                placeholder="Digite seu CPF">
            </div>

            <div class="input-field"><i class="fa-solid fa-id-card"></i>
                <input required type="text" name="rg" id="rg" 
                placeholder="Digite seu RG">
            </div>
            
            <div class="input-field"><i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="orgaoemissor" id="orgaoemissor" 
                placeholder="Órgão emissor">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-calendar-days"></i>
                <input required type="text" name="datadeemissao" id="datadeemissao" 
                placeholder="Data de emissão">
            </div>

            <div class="input-field">
                <i class="fa-sharp fa-solid fa-phone"></i>
                <input required type="text" name="telefone" id="telefone" 
                placeholder="Digite seu com telefone DDD">
            </div>
            <p>Ex: 11xxxxxxxxx</p>
            
            <h3>Informações de localidade</h3>
            <div class="input-field">
                <i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="endereco" id="endereco" 
                placeholder="Digite seu endereço">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="localtrabalho" id="localtrabalho" 
                placeholder="Digite o local de trabalho">
            </div>

            <div class="input-field">
                <i class="fa-solid fa-location-dot"></i>
                <input required type="text" name="enderecocomercial" id="enderecocomercial" 
                placeholder="Digite o endereço comercial">
            </div>

            <h3>Informações da conta</h3>
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="email" name="email" id="email" 
                placeholder="Digite seu email">
                <div class="underline"></div>
            </div>
            
            <div class="input-field">
                <i class="fa-sharp fa-solid fa-lock"></i>
                <input type="password" name="senha" id="senha" 
                placeholder="Digite sua senha" minlength="6" maxlength="14">
                <div class="underline"></div>
            </div>
            <input type="submit" value="Cadastrar" name="cadastro" id="cadastro">
        </form>

        <div class="footer">
            <a href="../Login_Cliente/login_cliente.php">Já tem login?</a>
        </div>
    </main>

</body>
</html>