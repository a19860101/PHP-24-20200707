<?php
    include("function/post.php");
    session_start();
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = $_SESSION["ID"];

    storePost($title,$content,$c_id,$u_id);
    header("location:index.php");
