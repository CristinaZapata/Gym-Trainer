<?php
	//CLASE DAO - Data Access Object

	class user{

		function agregarRegistro($nombre, $apellidos, $email, $password){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','root','gymtrainer');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "INSERT INTO usuario(email,nombre,apellido,password) VALUES('". $email ."','". $nombre."','".$apellidos."','".$password."')";
			$result = mysqli_query($conexion, $sql);

			if (!$result and $mysqliDebug) {
				echo "<p>There was an error in query: $sql</p>";
				echo $conexion->error;
			}

			return $result;
		}
	}
?>