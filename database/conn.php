<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php0707";
    
    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name)or die("資料庫連結失敗，請洽網站管理員");
    mysqli_query($conn,"SET NAMES utf8");
    
    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");
?>