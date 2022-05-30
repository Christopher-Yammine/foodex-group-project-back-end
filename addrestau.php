<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");
$restaurant_name=$_POST["restaurant_name"];
$restaurant_picture =$_POST["restaurant_picture"];
$restaurant_description=$_POST["restaurant_description"];
$restaurant_type =$_POST["restaurant_type"];
$restaurant_number=$_POST["restaurant_number"];
$location_id=$_POST["location_id"];

$query=$mysqli->prepare("insert into restaurants(restaurant_name,restaurant_picture,restaurant_description,
restaurant_type,restaurant_number,location_id) values (?,?,?,?,?,?)");
$query->bind_param("sssisi",$restaurant_name,$restaurant_picture,$restaurant_description,$restaurant_type,$restaurant_number,$location_id);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>