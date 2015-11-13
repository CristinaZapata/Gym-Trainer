<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

       if(isset($_POST['fecha_nac']) && isset($_POST['sexo']) && isset($_POST['altura']) && isset($_POST['peso'])){

			require_once('../clases/classPerfil.php');

			$fecha_nac= $_POST['fecha_nac'];
			$sexo= $_POST['sexo'];
			$altura= $_POST['altura'];
			$peso= $_POST['peso'];
			//$password2= $_POST['password2'];

			//$verify = new EmailVerify();
			//$verify->debug_on = true;
			//$verEmail;

			//$verify->local_user = 'localuser';	//username of your address from which you are sending message to verify
			//$verify->local_host = 'localhost';	//domain name of your address

			
			$perfil = new perfil();
			$result= $perfil->agregarPerfil($fecha_nac, $sexo, $altura, $peso);
			
			/*if($verify->verify($email)){
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
			}*/
			
			echo "Todo Ok";

		}else{
			echo "Llenar todos los campos";
		}

?>
