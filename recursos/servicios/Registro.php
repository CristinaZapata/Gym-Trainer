<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

       if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])){

			//require_once('../clases/classRegistro.php');

			//registro
			$nombre= $_POST['nombre'];
			$apellidos= $_POST['apellidos'];
			$username= $_POST['username'];
			$password= $_POST['password'];
			$password2= $_POST['password2'];

			echo "success";

			/*if($password == $password2){
				$user = new user();
				echo $user->agregarRegistro($nombre, $apellidos, $username, $password);
			}else{
				echo "Contraseñas no coinciden";
			}*/

		}else{
			echo "Ño";
		}

?>
