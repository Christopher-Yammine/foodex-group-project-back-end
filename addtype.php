<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");
$type=$_POST["type"];



$query=$mysqli->prepare("insert into restaurant_types(type) values (?)");
$query->bind_param("s",$type);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>