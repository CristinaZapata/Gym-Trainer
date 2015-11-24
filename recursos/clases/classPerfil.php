<?php
	//CLASE DAO - Data Access Object

	/*class user{

		function modificarPerfil($contrasenia, $fecha_nac, $sexo, $altura, $peso){
			$conexion = new mysqli('localhost','root','root','gymtrainer2')
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
	}*/
?>

<?php
	//CLASE DAO - Data Access Object

	class perfil{

		function agregarPerfil($fecha_nac, $sexo, $altura, $peso, $imc, $email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','Konichiwa%07','gymtrainer2');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}			

			$sql = "INSERT INTO perfil(fecha_nac, sexo, peso, altura, imc) VALUES('". $fecha_nac ."','". $sexo."',".$peso.",".$altura.",".$imc.")";
			$result = mysqli_query($conexion, $sql);

			if (!$result and $mysqliDebug) {
				echo "<p>There was an error in query: $sql</p>";
				echo $conexion->error;
			}else{
				$last_id = mysqli_insert_id($conexion);
				$sqlUsuario = "UPDATE usuario SET id_perfil=". $last_id ." WHERE email = '" . $email ."'";
				$resultUsuario = mysqli_query($conexion, $sqlUsuario);
			}
			
			return $result;
		}
		
		function obtenerIMC($email){
			$mysqliDebug = true;
			$conexion = @new mysqli('localhost','root','Konichiwa%07','gymtrainer2');

			if ($conexion->connect_errno) {
				echo '<p>There was an error connecting to the database!</p>';
				if ($mysqliDebug) {
					echo $conexion->connect_error;
				}
				die();
			}
			
			$sql = "SELECT imc FROM perfil WHERE id_perfil = (SELECT id_perfil FROM usuario WHERE email='". $email. "')";
			$result = mysqli_query($conexion,$sql);
			
			if (!$result and $mysqliDebug) {
				echo "<p>There was an error in query: $sql</p>";
				echo $conexion->error;
			}else{			
				//echo row['imc'];
			
				echo $result;
			
			}
		}
	}
?>