<?php
	//CLASE DAO - Data Access Object

	class login{

		function loginUser($email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','root','gymtrainer');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "SELECT email,password FROM usuario WHERE email='$email'";

			$result = $conexion->query($sql);

			if($conexion->query($sql) === false){
				return "error";
			}
			else{
				return $result;
			}
		}
	}
?>