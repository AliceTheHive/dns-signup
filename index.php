<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<title>DNS Signup</title>
	<!-- <script type="text/javascript">
	function myCheck(){ // called everytime password is entered
		var pass1 = "green";
		var pass2 = document.getElementById("password").value;
		if (pass1 == pass2) {
			document.getElementById("unlock").removeAttribute("readonly");
		}
	}
</script> -->
</head>
<body>
	<form action="insert.php" method="post">
		URL:
		<br />
		<input type="text" name="url" pattern="[a-z]{2,10}" required="required" id="ioe" /><span class="suffix">.ioe</span>
		<br />
		IP:
		<br />
		<input type="text" name="ip" id="unlock" pattern="((^|\.)((25[0-5])|(2[0-4]\d)|(1\d\d)|([1-9]?\d))){4}$" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"/>
		<!-- <input type="password" id="password" style="width: 10%;"/><span class="suffix">Unlock</span> -->
		<br />
		<input type="submit" />
	</form>
</body>
</html>
