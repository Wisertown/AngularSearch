<?php 
include("dbconn.php");

$sql = "SELECT * FROM cars";
$result = mysqli_query($conn, $sql);
$arr = array();
if(mysqli_num_rows($result) != 0){
while($row = mysqli_fetch_assoc($result)) {
$arr[] = $row;
}
echo $json_info = json_encode($arr);
}; ?>