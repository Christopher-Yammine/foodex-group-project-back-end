<?php
require('connection.php');

$query =$mysqli->prepare("select * from restaurant_types");

$query->execute();
$array = $query->get_result();
$response =[];
while ($reviews = $array-> fetch_assoc()){
    $response[]=$reviews;
    
}
$json = json_encode($response);
echo $json;
?>