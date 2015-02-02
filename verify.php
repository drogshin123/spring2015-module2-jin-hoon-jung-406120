<html>
<body>
	<?php
	session_start();
	$verify = fopen("../../../home/dog2/mod2/users.txt", "r");
	$name = trim($_POST["usrname"]);
	$name2 = $_POST["name"];

	while ( !feof($verify)){
		$t = fgets($verify);
		if ($name == trim($t)){
			$_SESSION["name"] = $name;
			$_SESSION["name2"] = $name2;
			header("Location: filepage.php");
			fclose($verify);
			exit;
		}
	}
	printf("$name is incorrect. Please enter a valid username.");
	fclose($verify);
	exit;
	?>
</body>
</html>