<?php
	//login

	ini_set('display_errors',1);
	error_reporting(E_ALL);

    if(isset($_POST['username']) && isset($_POST['password'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		$u1="mariana@me.com";
		$p1="mariana";
		$u2="cristina@gmail.com";
		$p2="cris";
		$u3="leslie@gmail.com";
		$p3="les";

		if(($username == $u1 && $password==$p1) || ($username == $u2 && $password==$p2) || ($username == $u3 && $password==$p3)){
			echo "LOGIN EXITOSO";
		}else{
			echo "Usuario o contrase&ntilde;a no encontrado.";
		}

	}else{
		echo "Ño";
	}
?>