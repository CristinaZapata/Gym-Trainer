<?php
	//CLASE DAO - Data Access Object

	class user{

		function agregarRegistro($nombre, $apellidos, $username, $password){
			$conexion = new mysqli('localhost','root','1234','phplogin')
			or die("Fallo en el establecimiento de la conexion");

			if (!$conexion) {
			    die('Error de Conexi�n (' . mysqli_connect_errno() . ') '
			            . mysqli_connect_error());
			}

			echo '�xito... ' . mysqli_get_host_info($conexion) . "\n";


			$sql = "INSERT INTO users(username,password,nombre,apellidos) VALUES(". $username .",'". $password."','".$nombre."','".$apellidos."')";
			$result = mysqli_query($conexion, $sql);

			if($conexion->query($sql) === false){
				return "error";
			}

			return $result;
		}
	}
?>