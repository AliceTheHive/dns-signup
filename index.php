<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<?php
// Split hosts file by a newline into an array.
$hosts = explode("\n", rtrim(file_get_contents('etc/hosts')));

// Iterate through the array, line by line.
foreach($hosts as $host) {

	// If a line contains #, skip it.
	// ISSUE: Even if # is after the main text, the line is still skipped.

	$input = explode("#", $host);
	$host = $input[0];

	// Split line by a tab, then put it into the $ip=>$url pair.
	list($ip, $url) = explode("\t", $host);
	$hosts_arr[$ip] = $url;
}

// Debug stuff.
var_dump($hosts_arr);
?>
</body>
</html>
