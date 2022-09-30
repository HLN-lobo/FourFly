<?php
session_start();
$_SESSION['cidades'] = 'saopaulo';
header("Location: ../HomePage/lista_passagens.php");
?>