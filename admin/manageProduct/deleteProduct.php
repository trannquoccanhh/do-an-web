<?php require 'functions.php';

$idProduct=$_POST['idProduct'];
$error=[];

$sql="DELETE from product where item_id='$idProduct'";
if($conn->query($sql)==true){
$error[]=array(
		"error"=>false,
		"message"=>"Xóa sản phẩm thành công"
	);
}else{
	$error[]=array(
		"error"=>true,
		"message"=>"Xóa sản phẩm Không thành công"
	);
}
echo json_encode($error);