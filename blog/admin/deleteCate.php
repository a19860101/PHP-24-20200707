<?php 
    include("function/cate.php");
    deleteCate($_POST["id"]);
    header("Location:cateList.php");