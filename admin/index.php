<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>
<body>
<?php
// Split hosts file by a newline into an array.
$hosts = explode("\n", file_get_contents('etc/hosts'));

// Iterate through the array, line by line.
foreach($hosts as $host) {
	// If a line contains #, skip it.
	$input = explode("#", $host);
	$host = rtrim($input[0]);

	// Split line by a tab, then put it into the $ip=>$url pair.
	@list($ip, $url) = explode("\t", $host);
	$hosts_arr[$ip] = $url;
}

$hosts = array_filter($hosts_arr);
// Debug stuff.
var_dump($hosts);
?>
</body>
</html>
