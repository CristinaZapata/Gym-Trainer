<?php
	//CLASE DAO - Data Access Object

	class user{

		function modificarPerfil($contrasenia, $fecha_nac, $sexo, $altura, $peso){
			$conexion = new mysqli('localhost','root','root','gymtrainer')
			or die("Fallo en el establecimiento de la conexion");

			if (!$conexion) {
			    die('Error de ConexiÛn (' . mysqli_connect_errno() . ') '
			            . mysqli_connect_error());
			}

			echo '…xito... ' . mysqli_get_host_info($conexion) . "\n";


			$sql = "INSERT INTO perfil(contrasenia,fecha_nac,sexo,altura,peso) VALUES(". $contrasenia .",'". $fecha_nac."','".$sexo."','".$altura."','".$peso."')";
			$result = mysqli_query($conexion, $sql);

			if($conexion->query($sql) === false){
				return "error";
			}

			return $result;
		}
	}
?>