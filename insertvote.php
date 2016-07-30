<?php 
	include("dbconn.php");

	$data = json_decode(file_get_contents("php://input"));

	$id = mysqli_real_escape_string($conn, $data->id);

	$sql = "UPDATE cars set vote = vote +1 where cars.id = '$id'";
	mysqli_query($conn, $sql);
	echo true;

?>