<?php
    include("function.php");
    $file = $_FILES["img"];
    $path = uploadImg($file);

    store($path);
    header("refresh:2;url=index.php");