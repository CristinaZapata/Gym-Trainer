<?php
	//login

	ini_set('display_errors',1);
	error_reporting(E_ALL);

       if(isset($_POST['username']) && isset($_POST['password'])){

			require_once('../clases/classLogin.php');

			$email= $_POST['username'];
			$password= $_POST['password'];

			$login = new login();
			$result= $login->loginUser($email);

			$row = mysqli_fetch_array($result);

			if($row !== null){
				if($row["password"]== $password){
					session_start();
					$_SESSION['emailUsuario'] = $row['email'];
					echo 'no_errors';
					//header("Location: http://localhost/Gym-Trainer/inicio.php");
				}else{
					 echo "Password incorrecto";
				}
			}else{
				echo "El usuario o password son incorrectos";
			}

		}else{
			echo "Llenar todos los campos";
		}
?>