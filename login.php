<?php
include("connection.php");
$email=$_POST["email"];
$password=$_POST["password"];
$query=$mysqli->prepare("select id_user,id_usertype,name from users where email =? and password =?");
$query->bind_param("ss",$email,$password);
$query->execute();
$query->store_result();
$num_rows=$query->num_rows;
$query->bind_result($id,$id_usertype,$name);
$query->fetch();
$response=[];
if ($num_rows==0){
    $response["response"]="user not found";
    echo json_encode($response);
}
else {
    $response["response"]="logged in";
    $response["user_id"]=$id;
    $response["id_usertype"]=$id_usertype;
    $response["name"]=$name;
    echo json_encode($response);
    
}
?>