<?php require 'DBController.php';

$db = new DBController();
$conn = $db->connect();

$key=$_POST['key'];
// $key="";
$sql="SELECT * FROM product ";
// $result='';
// if($key == ""){
//     $result = $conn->query('SELECT * FROM product');
// }
// else{
//     $result = $conn->query('SELECT * FROM `product` WHERE `item_name` like "'.$key.'" or `item_brand` like "'.$key.'"');
// }
if($key != ""){
    $sql .="WHERE `item_name` like '%".$key."%' or `item_brand` like '".$key."'";
}
$result = $conn->query($sql);
$KQ=array();
while ($rows = $result->fetch_assoc()) {
    $KQ[] = array(
        "ID" => $rows['item_id'] ,
        "Name" => $rows['item_name'], 
        "Price"=>$rows['item_price'],
        "img"=>$rows['item_image'],
        "Brand"=>$rows['item_brand']
    );
}
echo json_encode($KQ);
$conn->close();