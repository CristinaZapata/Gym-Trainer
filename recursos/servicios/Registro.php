<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

       if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])){

			require_once('../clases/classRegistro.php');
			include "class.emailverify.php";

			$nombre= $_POST['nombre'];
			$apellidos= $_POST['apellidos'];
			$email= $_POST['username'];
			$password= $_POST['password'];
			$password2= $_POST['password2'];

			$verify = new EmailVerify();
			//$verify->debug_on = true;
			$verEmail;

			$verify->local_user = 'localuser';	//username of your address from which you are sending message to verify
			$verify->local_host = 'localhost';	//domain name of your address

			if($verify->verify($email)){
				$verEmail=1;
				$user = new user();
				$result= $user->agregarRegistro($nombre, $apellidos, $email, $password);
			}else{
				$result=0;
				$verEmail=0;
				echo 'Escriba un email existente';
			}

			if($result == 1 && $verEmail==1){
				echo 'no_errors';
			}

		}else{
			echo "Llenar todos los campos";
		}

?>
