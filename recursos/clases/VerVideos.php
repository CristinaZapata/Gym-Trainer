<?php

	class administrator{

		function verVideosCategoria($categoria){
			$conexion= new mysqli('localhost','root','root','gymtrainer')
			or die("Fallo en el establecimiento de la conexion");

			$sql = "SELECT * FROM video WHERE categoria='".$categoria."'";
            //$sql = "SELECT * FROM video WHERE categoria='Pierna'";
			$results = mysqli_query($conexion, $sql);
			$result = $conexion->query($sql);

			if($conexion->query($sql) === false){
				return "error";
			}

			return $result;
		}
        
        function filtroVideos($texto){
            $conexion= new mysqli('localhost','root','Konichiwa%07','GymTrainer2')
			or die("Fallo en el establecimiento de la conexion");

			$sql = "SELECT * FROM video WHERE titulo LIKE'%".$texto."%'";
            //$sql = "SELECT * FROM video WHERE categoria='Pierna'";
			$results = mysqli_query($conexion, $sql);
			$result = $conexion->query($sql);

			if($conexion->query($sql) === false){
				return "error";
			}

			return $result;
        }
	}
?>