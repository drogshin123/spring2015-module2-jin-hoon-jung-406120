<?php
session_start();
$filename = $_POST['filename'];
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}
$username = $_SESSION['name'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}
$full_path = sprintf("../../../home/dog2/mod2/%s/%s", $_SESSION["name"], $filename);
$finfo = new finfo(FILEINFO_MIME_TYPE);

$mime = $finfo->file($full_path);

header("Content-Type: ".$mime);
header("Content-Disposition: attachment; filename=\"$filename\"");
readfile($full_path);
?>