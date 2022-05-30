<?php
require('connection.php');

$query =$mysqli->prepare("select * from locations");

$query->execute();
$array = $query->get_result();
$response =[];
while ($reviews = $array-> fetch_assoc()){
    $response[]=$reviews;
    
}
$json = json_encode($response);
echo $json;
?>