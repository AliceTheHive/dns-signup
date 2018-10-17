<?php
require_once('db.php');

$result = $mysqli->query("SELECT `ip`, `url` FROM `domain` WHERE valid='1';");

while($row = $result->fetch_assoc()) {
	echo $row['ip'] . "\t" . $row['url'] . "\n";
}
?>
