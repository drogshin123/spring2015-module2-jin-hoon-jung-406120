<html>
<body>
<?php
session_start();
$filename = $_POST["filename"];
$nfilename = $_POST["edit"];
$name = $_SESSION["name"];

$odfull_path = sprintf("../../../home/dog2/mod2/%s/%s", $name, $filename);
$edfull_path = sprintf("../../../home/dog2/mod2/%s/%s", $name, $nfilename);
##rename ("/folder/file.ext", "/folder/newfile.ext");
rename("$odfull_path", "$edfull_path");
header("Location: filepage.php");
exit;
?>
</body>
</html>