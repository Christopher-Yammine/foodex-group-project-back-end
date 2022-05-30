<?php
include("connection.php");
$user_id=$_POST["user_id"];
$id_restaurant=$_POST["id_restaurant"];
$rev_status=0;
$rating=$_POST["rating"];
$review_text=$_POST["review_text"];

$query=$mysqli->prepare("insert into reviews(user_id,id_restaurant,rev_status,rating,review_text) values(?,?,?,?,?)");
$query->bind_param("iiiis",$user_id,$id_restaurant,$rev_status,$rating,$review_text);
$query->execute();
$response=[];
$response["status"]="inserted";

echo json_encode($response);


?>