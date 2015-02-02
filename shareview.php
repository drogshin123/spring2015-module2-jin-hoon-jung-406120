<?php
session_start();
$sharefilename = $_POST['sharefilename'];
if( !preg_match('/^[\w_\.\-]+$/', $sharefilename) ){
	echo "Invalid filename";
	exit;
}
$username = $_SESSION['name'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}
$full_pathsh = sprintf("../../../home/dog2/mod2/%s/%s", "share", $sharefilename);
$finfo = new finfo(FILEINFO_MIME_TYPE);

$mime = $finfo->file($full_pathsh);

header("Content-Type: ".$mime);
readfile($full_pathsh);
?>