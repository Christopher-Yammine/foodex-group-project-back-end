<?php
require('connection.php');
$id_user=$_POST["id_user"];
$query =$mysqli->prepare("select * from users where id_user=?");
$query->bind_param("i",$id_user);
$query->execute();
$array = $query->get_result();
$response =[];
while ($users = $array-> fetch_assoc()){
    $response[]=$users;
    
}
$json = json_encode($response);
echo $json;





?>