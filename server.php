<?php 
$str = file_get_contents("discs.json");

$discsP = json_decode($str,true);


header("Content-Type: application/json");

echo json_encode($discsP);