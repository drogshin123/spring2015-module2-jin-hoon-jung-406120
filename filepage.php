<html>

<body>
	<?php
	session_start();
	$name = $_SESSION["name"];
	$name2 = $_SESSION["name2"];
	$dir = sprintf("../../../home/dog2/mod2/%s/", $name);
	$sharedir = sprintf("../../../home/dog2/mod2/share");

	$homefolder =  array_slice(scandir($dir), 2);;
	$sharefolder =  array_slice(scandir($sharedir), 2);;
	printf("Welcome back $name2 <br>");
	echo "<ul>\n";
	for($i= 0; $i<count($homefolder); $i++){
		printf($homefolder[$i]);
		printf("<form action='view.php' method='POST'><input type='hidden' name='filename' value='%s'/><input type='submit' name='view' value='view'/></form>",$homefolder[$i]);

		printf("<form action='delete.php' method='POST'><input type='hidden' name='filename' value='%s'/><input type='submit' name='delete' value='Delete'/></form><br>",$homefolder[$i]);
	}
	for($j= 0; $j<count($sharefolder); $j++){
		printf($sharefolder[$j]);
		printf("<form action='shareview.php' method='POST'><input type='hidden' name='sharefilename' value='%s'/><input type='submit' name='view' value='view'/></form>",$sharefolder[$j]);
		printf("<form action='sharedelete.php' method='POST'><input type='hidden' name='sharefilename' value='%s'/><input type='submit' name='delete' value='Delete'/></form><br>",$sharefolder[$j]);
	}
	echo "</ul>\n";
	printf("<form enctype='multipart/form-data' action='upload.php' method='POST'><input type='hidden' name='MAX_FILE_SIZE' value='20000000' /><label for='uploadfile_input'>Choose a file to upload:</label> <input name='uploadedfile' type='file' id='uploadfile_input' /><input type='submit' value='Upload File' /></form>");
	printf("<form enctype='multipart/form-data' action='uploadshare.php' method='POST'><input type='hidden' name='MAX_FILE_SIZE' value='20000000' /><label for='uploadfile_input'>Choose a file to upload to Share:</label> <input name='uploadedfile' type='file' id='uploadfile_input' /><input type='submit' value='Upload File' /></form>");
	printf("<form enctype='multipart/form-data' action='profpic.php' method='POST'>
		<input type='hidden' name='MAX_FILE_SIZE' value='20000000' /><label for='uploadfile_input'>
		Choose a photo to upload:</label> <input name='uploadedfile' type='file' id='uploadfile_input' />
		<input type='submit' value='Upload Photo' /></form>");
	printf("<form action='logout.php' method='GET'><input type='submit' name='logout' value='Logout'/></form>");
		?>

	</body>
	</html>

