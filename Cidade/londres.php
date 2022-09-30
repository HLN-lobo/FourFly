<?php
session_start();
$_SESSION['cidades'] = 'londres';
header("Location: ../HomePage/lista_passagens.php");
?>