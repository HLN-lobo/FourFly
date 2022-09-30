<?php
session_start();
$_SESSION['cidades'] ='eua';
header("Location: ../HomePage/lista_passagens.php");
?>