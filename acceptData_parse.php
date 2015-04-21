<?php
session_start();
// start a session for each user(end when your close brower).
$flashKey = isset($_GET['key1']);
$parseID;
// Parse server
use Parse\ParseObject;

$pipeNumber = new ParseObject("PipeNumber");
$pipeNumber -> set("userSelPipe", "1");
$gameScore -> save();
$parseID -> getObjectId();

if ($flashKey) { 
	// Get Data from Flash
	$saveKey = $_GET['key1'];
	// ParseObject
	$pipeNumber = ParseObject::create("PipeNumber");
	$pipeNumber -> set("userSelPipe", $saveKey);
	$gameScore -> save();
	$parseID -> getObjectId();
}
// Get Data from Unity
if (isset($_GET['getkey'])) {
	$query = new ParseQuery("PipeNumber");
	$pipeNumber_uni = $query->get($parseID);
	$pipeNumRe = $pipeNumber_uni->get("userSelPipe");
	echo $pipeNumRe;
	# code...
}
?>
