<?php
session_start();
$_SESSION['cidades'] = 'amazonas';
header("Location: ../HomePage/lista_passagens.php");
?>