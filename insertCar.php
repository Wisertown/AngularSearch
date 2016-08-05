<?Php
include("dbconn.php");

	$data = json_decode(file_get_contents("php://input"));

echo "GOT HERE";
die("died");


?>
<script type="text/javascript">
	console.log(<?php echo $data; ?>);
</script>