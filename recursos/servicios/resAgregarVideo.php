<?php
    require_once('../clases/VerVideos.php');
    $rutina = $_POST['rutina'];
    $video = $_POST['video'];

    $admin = new administrator();
	$result = $admin->addVideo($rutina, $video);
    $res="";
    //while ($row = $result->fetch_assoc()) {
        //$res = $row['id_video'];
    //}
    echo $result;
?>