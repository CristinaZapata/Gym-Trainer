<?php

	class administrator{

		function verVideosCategoria($categoria){
			$conexion= new mysqli('localhost','root','Konichiwa%07','gymtrainer2')
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
        function getRutinas(){
            $conexion= new mysqli('localhost','root','Konichiwa%07','GymTrainer2')
			or die("Fallo en el establecimiento de la conexion");
            $results = mysqli_query($conexion, $sql);
            $sql = "SELECT id_rutina FROM rutina WHERE email = ".$_SESSION['emailUsuario'];
            $resRutinaVid = mysqli_query($conexion, $sql);
            $result = $conexion->query($sql);
            if($conexion->query($sql) === false){
				return "error en query";
			}
            
            return $result;
            
        }
        function getIDVideo($url){
            $conexion= new mysqli('localhost','root','Konichiwa%07','GymTrainer2')
			or die("Fallo en el establecimiento de la conexion");
            $sql = "SELECT id_video FROM video WHERE url = '".$url."'";
            //$results = mysqli_query($conexion, $sql);
            $result = $conexion->query($sql);
            if($conexion->query($sql) === false){
				return "error en query";
			}
            return $result;
        }
        
        
        function addVideo($rutina, $video){
            $conexion= new mysqli('localhost','root','Konichiwa%07','GymTrainer2')
			or die("Fallo en el establecimiento de la conexion");
            
            $sql = "INSERT INTO videos_rutina (id_rutina, id_video) VALUES (".$rutina.", ".$video.")";
            if($conexion->query($sql) === false){
				return "El video ya ha sido añadido a la rutina";
			}
            
			return "Se ha añadido el video a tu rutina";
        }
        
        
	}
?>