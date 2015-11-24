<?php
    
    require_once('../clases/classLogin.php');
    session_start();
    
    $email = $_SESSION['emailUsuario'];
    
    $res = 0;
    $login = new login();
	$result = $login->getUltimaSesion($email);
    
    while ($row = $result->fetch_assoc()) {
        $ultima_sesion = $row['ultima_sesion'];
    }
    
	$hoy = date("Y-m-d", strtotime('now'));
	
	$fecha_ant = new DateTime($ultima_sesion);
	$fecha_actual = new DateTime($hoy);
	
	$dDiff = $fecha_ant->diff($fecha_actual);
	$dDiffDays = (int)$dDiff->format("%r%a");
	
	if($dDiffDays <= 1){
		echo "images/girl1.png";
	}else{
		if($dDiffDays <= 15){
			echo "images/girl2.png";
		}else{
			echo "images/girl3.png";
		}
	}
	
?>