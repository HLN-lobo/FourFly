<?php
session_start();
$_SESSION['cidades'] = 'riodejaneiro';
header("Location: ../HomePage/lista_passagens.php");
?>