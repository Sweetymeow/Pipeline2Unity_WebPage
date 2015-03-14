<?php

$flashKey = isset($_GET['key1']);

if ($flashKey) { 
	// Get Data from Flash
	$saveKey = $_GET['key1'];
	$myfile = fopen("pipename.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $saveKey);
	$myfile = fopen("pipename.txt", "r") or die("Unable to open file!");
	echo "Accept key1 data: ";
	echo fgets($myfile);
	echo "\n";
	fclose($myfile);
}
// Get Data from Unity
if (isset($_GET['getkey'])) {
	// Read txt file in Sties Folder(LocalHost)
	$myunityfile= fopen("pipename.txt", "r") or die("Unable to open file!");
	echo fgets($myunityfile);
	fclose($myunityfile);
	# code...
}
// else if($saveKey){
// 	echo "error";
// 	//echo "error\n";
// }





?>
