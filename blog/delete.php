<?php
    include("function/post.php");
    if($_POST["cover"] != "no-pic.png"){
        unlink("images/".$_POST["cover"]);
        unlink("thumbs/".$_POST["cover"]);
    }
    deletePost($_POST["id"]);

    header("location:index.php");