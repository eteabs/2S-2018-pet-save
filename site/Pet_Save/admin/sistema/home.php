<?php
session_start();
if (!$_SESSION['Login']):
    header('Location: ../index.php');
    die;
endif;

var_dump($_SESSION['Login']);

echo '</p>'. $_SESSION['Login']['email'] . ' Bem vindo ao Sistema......';
echo '</p><a href="../sair.php">Sair</a>';