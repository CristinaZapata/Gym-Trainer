<?php

    //ini_set('display_errors',1);
	//error_reporting(E_ALL);
     session_start();
     $sesion = $_SESSION['emailUsuario'];

	require_once('../clases/VerVideos.php');

	//instancia del DAO
	$admin = new administrator();
	$result = $admin->getVideosRutinas($sesion);
    
    if($result->num_rows > 0) {
	//Respuesta del servicio
        $videos = array();
        while( $row = $result->fetch_assoc()){
            $video = array($row["id_rutina"], $row["id_video"], $row["url"], $row["imagen"], $row["titulo"]);
            array_push($videos, $video);
            //echo $videos[0][0];
        }
        echo json_encode($videos);
    }else{
        echo "0 resultados";
    }

    //return $result;
?>