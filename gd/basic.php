<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $white = imagecolorallocate($canvas,255,255,255);

    imagefill($canvas,0,0,$red);
    imageline($canvas,0,0,800,600,$white);
    imageline($canvas,800,0,0,600,$white);
    imagestring($canvas,5,0,0,"HELLO PHP",$white);

    // header("content-type:image/jpeg");
    // imagejpeg($canvas,"test.jpg");
    header("content-type:image/png");
    imagepng($canvas);
    // header("content-type:image/gif");
    // imagegif($canvas,"test.gif");