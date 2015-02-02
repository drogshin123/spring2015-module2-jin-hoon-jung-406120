<?php
session_start();

// Get the filename and make sure it is valid
$propic = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $propic) ){
	echo "Invalid filename";
	exit;
}

// Get the username and make sure it is valid
$username = $_SESSION["name"];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}


$extenaccept = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
$picfull_path = sprintf("../../../home/dog2/mod2/%s/%s", $username, $propic);
if(isset($_FILES['uploadedfile'])) {
	if(!in_array($_FILES['uploadedfile']['type'], $extenaccept) && (!empty($_FILES["uploadedfile"]["type"]))) {
		die();
		exit;
	}
	else{

		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $picfull_path)) {
			##header("Location: filepage.php");
			##header('Content-Type: image/jpeg');
			//readfile($picfull_path);
			##echo '<img src="', $dir, '/', $file, '" alt="', $file, '" />';
			exit;
		}
		else {
			header("Location: upload_failure.html");
			exit;
		}
	}
}
?>