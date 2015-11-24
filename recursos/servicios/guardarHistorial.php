<?php

    //ini_set('display_errors',1);
	//error_reporting(E_ALL);
     session_start();
     $sesion = $_SESSION['emailUsuario'];

	require_once('../clases/VerVideos.php');

	//instancia del DAO
	$admin = new administrator();
	$result = $admin->registrarSesionEnHistorial($sesion);
    
    echo $result;

    //return $result;
?>