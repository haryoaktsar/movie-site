<?php
	$myFile = "ID.txt";
	$fh = fopen($myFile, 'w') or die("can't open file");
	$stringData = $_GET['id'];
	fwrite($fh, $stringData);
    fclose($fh);
    header("Location: details.html");
?>
