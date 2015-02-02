<?php
session_start();

// Get the filename and make sure it is valid
$sharefilename = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $sharefilename) ){
	echo "Invalid filename";
	exit;
}

// Get the username and make sure it is valid
$username = $_SESSION["name"];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$sharefull_path = sprintf("../../../home/dog2/mod2/share/%s", $sharefilename);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $sharefull_path)) {
	header("Location: filepage.php");
	exit;
}
else {
	header("Location: upload_failure.html");
	exit;
}

?>