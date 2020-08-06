<?php
    include("function/post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $id = $_POST["id"];

    if($_FILES["cover"]["name"]){
        //圖片經過修改
        $path = uploadImg($_FILES["cover"]);
    }elseif(!$_FILES["cover"]["name"] && $_POST["cover"]){
        //圖片存在不做任何動作
        $path = $_POST["cover"];
    }elseif(!$_FILES["cover"]["name"]){
        //刪除圖片
        $path = "no-pic.png";
    }



    updatePost($title,$content,$c_id,$id,$path);
    header("location:index.php");