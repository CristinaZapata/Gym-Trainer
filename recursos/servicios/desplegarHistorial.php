<?php

    //ini_set('display_errors',1);
	//error_reporting(E_ALL);
     session_start();
     $sesion = $_SESSION['emailUsuario'];

	require_once('../clases/VerVideos.php');

	//instancia del DAO
	$admin = new administrator();
	$result = $admin->desplegarHistorialSesiones($sesion);
    
    if($result->num_rows > 0) {
	//Respuesta del servicio
        $resultados = array();
        while( $row = $result->fetch_assoc()){
            $registro = array($row["id_usuario"], $row["fecha"]);
            array_push($resultados, $registro);
            //echo $videos[0][0];
        }
        echo json_encode($resultados);
    }else{
        echo "0 resultados";
    }

    //return $result;
?>