<?php
$mysqli = new mysqli('localhost', 'dns-signup', '8Jhgdi9LIFHj8fha', 'dns-signup');

if ($mysqli->connect_error) {
    die('MySQL Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>
