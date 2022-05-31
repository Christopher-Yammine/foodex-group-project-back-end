<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");
$city_name=$_POST["city_name"];
$street_name =$_POST["street_name"];


$query=$mysqli->prepare("insert into locations(city_name,street_name) values (?,?)");
$query->bind_param("ss",$city_name,$street_name);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>