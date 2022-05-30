<?php
require('connection.php');
$id=$_POST["id"];
$query =$mysqli->prepare("select r.* ,u.name,re.restaurant_name,re.restaurant_number from reviews r join users u on 
r.user_id=u.id_user join restaurants re on re.id_restaurant=r.id_restaurant where r.id_restaurant=?");
$query->bind_param("i",$id);
$query->execute();
$array = $query->get_result();
$response =[];
while ($reviews = $array-> fetch_assoc()){
    $response[]=$reviews;
    
}
$json = json_encode($response);
echo $json;
?>