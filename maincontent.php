<?php

require("/home/uxnoynv2/php/data/main-connect.php");
$con = db_connect();
$id = $_REQUEST['id'];
$result = mysqli_query($con, "SELECT * FROM ajax_maincontent WHERE id='$id'") or die (mysqli_error($con));


while ($row = mysqli_fetch_array($result)) {
	$id = ($row['id']);
	$artist = ($row['artist']);
	$content = ($row['content']);
	echo "<h2>$artist</h2>";
	echo "<p>$content";
	
}

?>