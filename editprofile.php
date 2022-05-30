<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");
$email=$_POST["email"];
$password =$_POST["password"];
$name =$_POST["name"];
$last_name=$_POST["last_name"];
$id_user=$_POST["id_user"];
$profile_picture=$_POST["profile_picture"];

$query=$mysqli->prepare("update users set email=?,password=?,name=?,last_name=?,profile_picture=? where id_user=?");
$query->bind_param("sssssi",$email,$password,$name,$last_name,$profile_picture,$id_user);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>