<?php
require_once("inc/db.php");

$url = $_POST["url"] . ".ioe";
$ip = $_POST["ip"];

$stmt = $mysqli->prepare("SELECT `url`, `ip` FROM `domain` WHERE (url = ? OR ip = ?)");
$stmt->bind_param('ss', $url, $ip);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows) {
	alert_url('Either your IP or domain already exist in our database...', $_SERVER['HTTP_REFERER']);
} else {
	$stmt = $mysqli->prepare("INSERT INTO `domain` (`url`, `ip`) VALUES (?, ?)");
	$stmt->bind_param('ss', $url, $ip);
	$stmt->execute();
	$stmt->close();
	alert_url('Entry has been successfully inserted and is awaiting approval...', $_SERVER['HTTP_REFERER']);
}

$mysqli->close();
?>
