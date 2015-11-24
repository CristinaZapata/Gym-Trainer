<?php
    
    require_once('../clases/VerVideos.php');
    $url = $_POST['url'];
    
    $res = 0;
    $admin = new administrator();
	$result = $admin->getIDVideo($url);
    
    while ($row = $result->fetch_assoc()) {
        $res = $row['id_video'];
    }
    echo $res;
    

?>