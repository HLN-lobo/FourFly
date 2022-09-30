<?php
session_start();
$_SESSION['cidades'] = 'riograndedosul';
header("Location: ../HomePage/lista_passagens.php");
?>