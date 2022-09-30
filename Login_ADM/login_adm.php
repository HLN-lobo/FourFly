<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/adm.css">
  <title>Login</title>
</head>
<body>

  <main class="container">
    <h2>Login</h2>
    <p id="erro"><?php

    if (isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    }

    ?>
    </p>
        <form action="processa_login.php" method="post">
        <div class="input-field">
            <i class="fa-sharp fa-solid fa-lock"></i>
            <input type="text" name="chave" id="username" 
            placeholder="Digite sua chave">
            <div class="underline"></div>
        </div>
        <div class="input-field">
            <i class="fa-sharp fa-solid fa-lock"></i>
            <input type="password" name="senha" id="password" 
            placeholder="Digite sua senha" minlength="6" maxlength="14">
        <div class="underline"></div>
        </div>
            <input type="submit" value="Continue" name="login">
        </form>
    </main>
</body>
</html>