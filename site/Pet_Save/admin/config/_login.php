<?php
	include '_functions.php';
	session_start();

	$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

	validarLogin($email, $senha);
