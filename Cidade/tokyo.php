<?php
session_start();
$_SESSION['cidades'] = 'tokyo';
header("Location: ../HomePage/lista_passagens.php");
?>