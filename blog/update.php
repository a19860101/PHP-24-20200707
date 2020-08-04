<?php
    include("function/post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = 1;
    $id = $_POST["id"];
    updatePost($title,$content,$c_id,$id);
    header("location:index.php");