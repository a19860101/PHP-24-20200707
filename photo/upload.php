<?php
    include("function.php");
    $file = $_FILES["img"];
    
    if($file["name"] == ""){
        $path = "no-pic.jpg";
    }else{
        $path = uploadImg($file);
    }

    store($path);
    echo "上傳成功";
    header("refresh:2;url=index.php");