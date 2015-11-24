<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);
	session_start();
       if(isset($_POST['fecha_nac']) && isset($_POST['sexo']) && isset($_POST['altura']) && isset($_POST['peso'])){

			require_once('../clases/classPerfil.php');

			$fecha_nac = $_POST['fecha_nac'];
			$sexo = $_POST['sexo'];
			$altura = $_POST['altura'];
			$peso = $_POST['peso'];
			$email = $_SESSION['emailUsuario'];
			
			$imc = $peso / ($altura * $altura);
			
			$perfil = new perfil();
			$result = $perfil->agregarPerfil($fecha_nac, $sexo, $altura, $peso, $imc, $email);
			//$resultIMC = $perfil->obtenerIMC($email);
			
			echo "Perfil modificado exitosamente";

		}else{
			echo "Llenar todos los campos";
		}

?>
