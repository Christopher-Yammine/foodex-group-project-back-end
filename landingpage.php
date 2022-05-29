<?php 
include("connection.php");

$query=$mysqli->prepare("SELECT r.*,l.city_name,rt.type FROM restaurants r join restaurant_types rt on r.restaurant_type=rt.id_restaurant_type join locations l on r.location_id=l.id_location");
$query->execute();
$array = $query->get_result();
$response =[];
while ($restaurant = $array-> fetch_assoc()){
    $response[]=$restaurant;
    
}
$json = json_encode($response);
echo $json;

?>
