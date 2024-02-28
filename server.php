<?php 
$str = file_get_contents("discs.json");

$discsP = json_decode($str,true);

$filter = $_GET['author'];
foreach($discsP as $disc){
    if($filter !== null && $filter ==  $disc['author']){
        $discsP = $disc;
     };
    
};

header("Content-Type: application/json");

echo json_encode($discsP);