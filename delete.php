<html>
<body>
<?php
session_start();
$filename = $_POST['filename'];
$name = $_SESSION["name"];

$full_path = sprintf("../../../home/dog2/mod2/%s/%s", $name, $filename);
unlink($full_path);
header("Location: delete_success.html");

?>
</body>
</html>

<!-- 
## 	unlink($fullpath) for deleting files
 -->