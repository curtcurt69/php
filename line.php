<?php
$myImage = imagecreate(200, 100);
$myGray = imagecolorallocate($myImage, 204, 204, 204);
$myBlack = imagecolorallocate($myImage, 0, 0, 0);
imageLine($myImage, 15, 35, 120, 60, $myBlack);
header("Content-Type: image/png");
imagepng($myImage);
imagedestroy($myImage);
?>