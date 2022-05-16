<?php 

include("config.php");
$id=$_POST['id'];
$sql = "DELETE FROM `products` WHERE id=$id";
if (mysqli_query($conn, $sql)) {
	echo json_encode(array("statusCode"=>200));
} 
else {
	echo json_encode(array("statusCode"=>201));
}

?>