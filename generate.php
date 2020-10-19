<?php
session_start();
header('Content-Type: image/jpeg');
$text=$_SESSION['secure'];
$font=30;
$img_height=20;
$img_width=120;
$image=imagecreate($img_width,$img_height);
$backgroung=imagecolorallocate($image, 255, 255, 255);
$foreground=imagecolorallocate($image, 0, 0, 0);
for($x=0;$x<=30;$x++){
$x1=rand(1,100);
$x2=rand(1,100);
$y1=rand(1,100);
$y2=rand(1,100);
imageline(image, x1, y1, x2, y2, color)
}
imagettftext($image, $font, 0, x, y, $foreground, 'font.ttf', $text);
imagejpeg($image)
?>
