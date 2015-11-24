<?php
    session_start();
    $sesion = $_SESSION['emailUsuario'];
    require_once('../clases/VerVideos.php');
    $admin = new administrator();
    $result = $admin->getRutinas($sesion);
    
    if($result->num_rows > 0) {
        $rutinas = array();
        while( $row = $result->fetch_assoc()){
            $rutina = $row["id_rutina"];
            array_push($rutinas, $rutina);
            //echo $rutinas[0];
        }
        echo json_encode($rutinas);
    }else{
        echo "No hay rutinas";
    }


?>