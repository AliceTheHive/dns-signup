<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
	<form action="insert.php" method="post">
		<div>
			URL:
			<div class="container">
				<input type="text" pattern="[a-z]{,10}" name="url" id="ioe">
				<span class="ioe">.ioe</span>
			</div>
			<br />
			IP:
			<input type="text" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly>
			<br />
			<input type="submit" />
		</div>
	</form>
</body>
</html>
