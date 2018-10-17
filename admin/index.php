<?php
require_once("../inc/db.php");
$result = $mysqli->query("SELECT `uid`, `url`, `ip`, `valid` FROM `domain`");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
</head>
<body>
	<form action="#" method="post">
<?php
$counter = 0;
while($row = $result->fetch_assoc()) {
	$i = $counter++;
	if($row['valid'] == 1) {
		$checked = "checked";
	} else {
		$checked = "";
	}
?>
		<label class="container"><?php echo $row['url'] . "\t" . $row['ip']; ?>
			<input type="hidden" value="0" name="valid_list[<?php echo $i; ?>]" />
			<input type="checkbox" value="1" name="valid_list[<?php echo $i; ?>]" <?php echo $checked; ?> />
			<span class="checkmark"></span>
		</label>
<?php
	echo "		<br />";
	$uid[] = $row['uid'];
}
?>
		<input type="submit"/>
	</form>

<?php
if(isset($_POST['valid_list'])) {
	$data = array(
		$_POST['valid_list'],
		$uid
	);
	//var_dump($data);
	//var_dump($data);
	//var_dump($_POST['valid_list']);
	$data_len = count($data[1]);
	for($i = 0; $i < $data_len; $i++) {
		$sql = "UPDATE `domain` SET `valid` = '" . $data[0][$i] . "' WHERE `uid` = " . $data[1][$i] . ";";
		$mysqli->query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		//echo $sql . "<br />";
	}
}
?>

</body>
</html>
