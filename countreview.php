<?php
require('connection.php');

$id=$_POST["id"];
$query =$mysqli->prepare("select count(*) as count ,TRUNCATE(AVG(r.rating),1) as avg,re.restaurant_name,re.restaurant_number  from reviews r join users u on 
r.user_id=u.id_user join restaurants re on re.id_restaurant=r.id_restaurant where r.id_restaurant=? and rev_status=1");
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