<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
	<form action="insert.php" method="post">
		URL:
		<br/>
		<input type="text" name="url" pattern="[a-z]{,10}" required="required" /><span class="suffix">.ioe</span>
		<br />
		IP:
		<br/>
		<input type="text" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly="readonly" />
		<br />
		<input type="submit" />
	</form>
</body>
</html>
