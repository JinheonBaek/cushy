<?php
$encoded_data = $_POST['mydata'];
$imgName_data = $_POST['imgName'];
$binary_data = base64_decode($encoded_data);

$result = file_put_contents("/var/www/html/face/VerifyFace/image/". $imgName_data, $binary_data);
?>