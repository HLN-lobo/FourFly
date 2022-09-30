<?php
session_start();
$_SESSION['cidades'] = 'bahia';
header("Location: ../HomePage/lista_passagens.php");
?>