<?php
$encoded_data = $_POST['mydata'];
$imgName_data = $_POST['imgname'];
$binary_data = base64_decode($encoded_data);

$result = file_put_contents("/var/www/html/face/EnrollFace/image/" . $imgName_data, $binary_data);
?>