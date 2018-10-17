<?php
require_once("../inc/db.php");
$result = $mysqli->query("SELECT `url`, `ip`, `valid` FROM `domain`");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>
<body>
<?php
while($row = $result->fetch_assoc()) {
	if($row['valid'] === 1) {
		$checked = "checked";
	} else {
		$checked = "";
	}
	?>
<label class="container">
	<?php echo $row['url'] . "\t" . $row['ip']; ?>
	<input type="checkbox" name="valid" <?php echo $checked; ?>

	<?php
	echo "<br />";
}
?>
</body>
</html>
