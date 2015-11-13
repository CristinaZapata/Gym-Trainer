<?php
	//CLASE DAO - Data Access Object

	class perfil{

		function agregarPerfil($fecha_nac, $sexo, $altura, $peso){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','root','gymtrainer');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}

			$sql = "INSERT INTO perfil(fecha_nac,sexo,peso,altura) VALUES('". $fecha_nac ."','". $sexo."','".$peso."','".$altura."')";
			$result = mysqli_query($conexion, $sql);

			if (!$result and $mysqliDebug) {
				echo "<p>There was an error in query: $sql</p>";
				echo $conexion->error;
			}

			return $result;
		}
	}
?>