<?php
    include("function/post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = 1;

    storePost($title,$content,$c_id,$u_id);
    header("location:index.php");
