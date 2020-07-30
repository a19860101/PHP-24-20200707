<?php
    $width = 800;
    $height = 600;
    $canvas = imagecreatetruecolor($width,$height);

    $red = imagecolorallocate($canvas,255,0,0);
    $white = imagecolorallocate($canvas,255,255,255);

    imagefill($canvas,0,0,$white);

    header("content-type:image/jpeg");
    imagejpeg($canvas);