<?php
	function validarLogin($email, $senha) {
		if($email == 'felipe.cavalca@etec.sp.gov.br' && $senha == '123') {
			$_SESSION['Login']['email'] = $email;
			$_SESSION['Login']['senha'] = $senha;
			
			header ('LOCATION:../sistema/home.php');
		} else
			header ('LOCATION:../index.php');
	}
