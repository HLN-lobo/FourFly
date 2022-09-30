<?php
session_start();
$_SESSION['cidades'] = 'ceara';
header("Location: ../HomePage/lista_passagens.php");
?>