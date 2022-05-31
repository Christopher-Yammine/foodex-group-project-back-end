<?php header('Access-Control-Allow-Origin: *'); 
include("connection.php");
$email=$_POST["email"];
$password =$_POST["password"];
$id_usertype=0;
$name =$_POST["name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$profile_picture=$_POST["profile_picture"];

$query=$mysqli->prepare("insert into users(email,password,id_usertype,name,last_name,gender,profile_picture) values (?,?,?,?,?,?,?)");
$query->bind_param("ssissis",$email,$password,$id_usertype,$name,$last_name,$gender,$profile_picture);
$query->execute();
$response = [];
$response["success"] = true;

echo json_encode($response);


?>