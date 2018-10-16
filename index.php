<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<script type="text/javascript">
	$("#ioe").after(".ioe");
	</script>
</head>
<body>
	<form action="insert.php" method="post">
		<div>
			URL:<br/>
			<input type="text" pattern="[a-z]{,10}" name="url"><span class="suffix">.ioe</span>
			<br />
			IP:<br/>
			<input type="text" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly>
			<br />
			<input type="submit" />
		</div>
	</form>
</body>
</html>
