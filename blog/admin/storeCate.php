<?php
    include("function/cate.php");
    storeCate($_POST["title"],$_POST["slug"]);
    header('location:cateList.php');