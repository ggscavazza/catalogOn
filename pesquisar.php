<?php
    $latitude = $_REQUEST['latitude'];
    $longitude = $_REQUEST['longitude'];

    $url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=".$latitude."&lon=".$longitude;

    echo $url."<br><br>";

    $busca_end = file_get_contents($url);
    echo $busca_end;
    exit();
?>