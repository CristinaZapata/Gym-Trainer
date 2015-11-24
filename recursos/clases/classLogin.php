<?php
	//CLASE DAO - Data Access Object

	class login{

		function loginUser($email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','Konichiwa%07','gymtrainer2');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "SELECT email, nombre, apellido, password FROM usuario WHERE email='$email'";
			$sqlDateUltima = "SELECT sesion_actual FROM usuario WHERE email = '" . $email ."' LIMIT 1";
			$ultima_sesion = mysqli_query($conexion, $sqlDateUltima);
			
			$row = mysqli_fetch_assoc($ultima_sesion);
			
			$sqlUltimaSesion = "UPDATE usuario SET ultima_sesion='". $row['sesion_actual'] . "' WHERE email = '" . $email ."'";
			$resultUltima = $conexion->query($sqlUltimaSesion);
			
			$sqlDate = "UPDATE usuario SET sesion_actual=NOW() WHERE email = '" . $email ."'";
			
			$result = $conexion->query($sql);
			$resultDate = $conexion->query($sqlDate);

			if($conexion->query($sql) === false){
				return "error";
			}
			else{
				return $result;
			}
		}
		
		function getUltimaSesion($email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','Konichiwa%07','gymtrainer2');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "SELECT ultima_sesion FROM usuario WHERE email='".$email."'";
			$result = $conexion->query($sql);

			if($conexion->query($sql) === false){
				return "error";
			}
			else{
				return $result;
			}
		}
		
		/*function loginUserName($email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','root','gymtrainer2');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "SELECT email, nombre, password FROM usuario WHERE email='$email'";

			$result = $conexion->query($sql);

			if($conexion->query($sql) === false){
				return "error";
			}
			else{
				return $result;
			}
		}*/
	}
?>