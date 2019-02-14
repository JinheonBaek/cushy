<?php
$data = $_POST['fileObj'];
$fileName_data = $_POST['fileName'];

 // save to server (beware of permissions)
$result = file_put_contents( "image/".$fileName_data, $data );
if (!$result) die("Could not save image!  Check file permissions.");
?>