
<?php

$displayby = isset($_REQUEST['displayby']) ? $_REQUEST['displayby'] : NULL;
$displayvalue = isset($_REQUEST['displayvalue']) ? $_REQUEST['displayvalue'] : NULL;

if ($displayby == 'genre') {
	switch($displayvalue) {
		case 'rock':
			$displayvalue = 'Rock';
			break;
		case 'pop':
			$displayvalue = 'Pop';
			break;
		case 'jazz':
			$displayvalue = 'Jazz';
			break;
		case 'alternative':
			$displayvalue = 'Alternative';
			break;
		case 'blues':
			$displayvalue = 'Blues';
			break;
		case 'electronic':
			$displayvalue = 'Electronic';
			break;
		}
}

if ($displayby == 'year') {
	switch($displayvalue) {
		case '197':
			$displayvalue = '197%';
			break;
		case '198':
			$displayvalue = '198%';
			break;
		case '199':
			$displayvalue = '199%';
			break;
		case '200':
			$displayvalue = '200%';
			break;
		}
}

if ($displayby == 'label') {
	switch($displayvalue) {
		case 'atlantic':
			$displayvalue = 'Atlantic';
			break;
		case 'am':
			$displayvalue = 'A &amp; M';
			break;
		case 'columbia':
			$displayvalue = 'Columbia';
			break;
		case 'colubmiarecords':
			$displayvalue = 'Columbia Records';
			break;
		case 'epictecords':
			$displayvalue = 'Epic Records';
			break;
		case 'epic':
			$displayvalue = 'Epic';
			break;
		case 'jive':
			$displayvalue = 'Jive';
			break;
		case 'rca':
			$displayvalue = 'RCA';
			break;
		case 'bbc':
			$displayvalue = 'BBC Worldwide';
			break;
		case 'virgin':
			$displayvalue = 'Virgin';
			break;
		case 'alligator':
			$displayvalue = 'Alligator Records';
			break;
		case 'solidstate':
			$displayvalue = 'Solid State Records';
			break;
		case 'dreamworks':
			$displayvalue = 'Dreamworks Records';
			break;
		case 'gotham':
			$displayvalue = 'Go! Discs/London';
			break;
		case 'polydor':
			$displayvalue = 'Polydor';
			break;
		case 'bluenote':
			$displayvalue = 'Blue Note';
			break;
		case 'riverside':
			$displayvalue = 'Riverside';
			break;
		case 'decca':
			$displayvalue = 'Decca';
			break;
		case 'parlophone':
			$displayvalue = 'Parlophone';
			break;
		case 'windup':
			$displayvalue = 'Wind-Up';
			break;
		}
}

require("/home/uxnoynv2/php/data/main-connect.php");
$con = db_connect();
$limstring = "ORDER BY RAND() LIMIT 4";
$result = mysqli_query($con, "SELECT * FROM cd_catalog_class $limstring") or die (mysqli_error($con));
if(isset($displayby) && isset($displayvalue)) {
	$result = mysqli_query($con, "SELECT * FROM cd_catalog_class WHERE $displayby LIKE '$displayvalue' $limstring") or die (mysqli_error($con));
}

while ($row = mysqli_fetch_array($result)) {
	$cd_id = ($row['cd_id']);
	$artist = ($row['artist']);
	$title = ($row['title']);
	$year = ($row['year']);
	$genre = ($row['genre']);
	$label = ($row['label']);
	$artwork = ($row['artwork']);
	$description = nl2br($row['description']);
	echo "<div class=\"thisCD\">";

	$artImage = "<img src=\"img/artwork/thumbs100/$artwork\" class=\"cdImage\" alt=\"CD cover\"/>";
	echo $artImage;
	echo " <p class=\"displayInfo\">". $artist ."</p>";
	echo " <p class=\"displayInfo\">". $title ."</p>";
	echo " <p class=\"displayInfo\">". $year ."</p>";
	echo " <p class=\"displayInfo\">". $genre ."</p>";
	echo "</div>";
}

?>