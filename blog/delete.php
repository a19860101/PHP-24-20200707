<?php
    include("function/post.php");
    deletePost($_POST["id"]);
    header("location:index.php");