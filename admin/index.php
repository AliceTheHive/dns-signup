<?php
require_once("../inc/db.php");
$result = $mysqli->query("SELECT `uid`, `url`, `ip`, `valid` FROM `domain`");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<title>DNS Signup &bull; Admin</title>
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
		<label class="container"><?php echo $row['ip'] . "\t" . $row['url'] . "\n"; ?>
			<input type="hidden" value="0" name="valid_list[<?php echo $i; ?>]" />
			<input type="checkbox" value="1" name="valid_list[<?php echo $i; ?>]" <?php echo $checked; ?> />
			<span class="checkmark"></span>
			<br />
		</label>
<?php
	echo "		<br />\n";
	$uid[] = $row['uid'];
	$ip[] = $row['ip'];
	$url[] = $row['url'];
}
?>
		<input type="submit" style="width: 75%;" name="approve" value="Update Approved List"/>
		<input type="submit" style="width: 75%;" name="delete" value="Delete Non-Approved"/>
	</form>
<?php
if(isset($_POST['approve'])) {
	$data = array(
		$_POST['valid_list'],
		$uid,
	);
	$data_len = count($data[1]);
	for($i = 0; $i < $data_len; $i++) {
		$sql = "UPDATE `domain` SET `valid` = '" . $data[0][$i] . "' WHERE `uid` = " . $data[1][$i] . ";";
		$mysqli->query($sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}

if(isset($_POST['delete'])) {
	$data = array(
		$_POST['valid_list'],
		$uid,
	);
	$data_len = count($data[1]);
	for($i = 0; $i < $data_len; $i++) {
		if($data[0][$i] == 0) {
			$sql = "DELETE FROM `domain` WHERE `valid` = " . $data[0][$i] . ";";
			$mysqli->query($sql);
			echo $sql;
			header('Location: ' . $_SERVER['HTTP_REFERER']);
		}
	}
}
?>
</body>
</html>
