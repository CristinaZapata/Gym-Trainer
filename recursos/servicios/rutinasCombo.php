<?php

    require_once('../clases/VerVideos.php');
    $admin = new administrator();
	$result = $admin->getRutinas();
    
    if($result->num_rows > 0) {
	//Respuesta del servicio
        $rutinas = array();
        while( $row = $result->fetch_assoc()){
            $rutina = array($row["id_rutina"]);
            array_push($rutinas, $rutina);
            echo $rutina[0];
        }
        echo json_encode($rutinas);
    }else{
        echo "No hay rutinas";
    }


?>