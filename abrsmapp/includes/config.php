<?php

    //database configuration

    $host       = "localhost";
    $user       = "root";
    $pass       = "root";
    $database   = "video_youtube";
/*
  $host       = "http://sql311.epizy.com";
   // $host       = "localhost";
    
	$user       = "epiz_25983510";
    $pass       = "tpmnwb6z";
    $database   = "epiz_25983510_video_youtube";
*/
    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

?>