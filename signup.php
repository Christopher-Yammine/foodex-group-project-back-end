<?php

include("connection.php");
$email=$_POST["email"];
$password =$_POST["password"];
$id_usertype=0;
$name =$_POST["name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];

$query=$mysqli->prepare("insert into users(email,password,id_usertype,name,last_name,gender) values (?,?,?,?,?,?)");
$query->bind_param("ssissi",$email,$password,$id_usertype,$name,$last_name,$gender);
$query->execute();


?>