<?php
    include("function/post.php");
    session_start();
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = $_SESSION["ID"];

    $file = $_FILES["cover"];
    
    if($file["name"] == ""){
        $path = "no-pic.png";
    }else{
        $path = uploadImg($file);
    }

    storePost($title,$content,$c_id,$u_id,$path);
    header("location:index.php");
