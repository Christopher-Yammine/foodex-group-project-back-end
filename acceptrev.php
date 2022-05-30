<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");

$id_review =$_POST["id_review"];


$query=$mysqli->prepare("update reviews set rev_status=1 where id_review=?");
$query->bind_param("i",$id_review);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>