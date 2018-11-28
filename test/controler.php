<?php
    $data = $_GET['id'];
	$myFile = "ID.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	fwrite($fh, $data);
    fclose($fh);
    header("Location: details.html");
?>
