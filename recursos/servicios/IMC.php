<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	session_start(); 

	require_once('../clases/classPerfil.php');
	
	$email = $_SESSION['emailUsuario'];
	
	$perfil = new perfil();
	$resultIMC = $perfil->obtenerIMC($email);
	
	while ($row = $resultIMC->fetch_assoc()) {
        $imc = $row['imc'];
    }
	
	echo $imc;
?>
