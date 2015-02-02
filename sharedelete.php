<?php
session_start();
$sharefilename = $_POST['sharefilename'];
$name = $_SESSION["name"];

$full_pathsh = sprintf("../../../home/dog2/mod2/share/%s", $sharefilename);
unlink($full_pathsh);
header("Location: delete_success.html");

?>