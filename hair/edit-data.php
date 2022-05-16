<?php
	include 'config.php';
	$id=$_POST['id']; 
	$rate=$_POST['rate'];
	$comment=$_POST['comment'];

	$sql = "UPDATE `reviews` SET `rating`='$rate', `content`='$comment' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
		// echo("Error description: " . $conn -> error);
	}
	mysqli_close($conn);
	
	
?>
