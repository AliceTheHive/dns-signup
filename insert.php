<?php
require_once("inc/db.php");

$ip = $_POST["ip"];
$url = $_POST["url"];

$stmt = $mysqli->prepare("INSERT INTO domain (ip, url) VALUES (?,?);");
$stmt->bind_param("ss", $ip, $url);
$stmt->execute();
$stmt->close();
$mysqli->close();
?>
