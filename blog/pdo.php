<?php
    // $db_host = "localhost";
    // $db_user = "admin";
    // $db_pw = "admin";
    // $db_name = "php0707";
    // $db_charset = "utf8mb4";
    $db_host = "sql106.epizy.com";
    $db_user = "epiz_26479022";
    $db_pw = "jrUCm2dJEmQE";
    $db_name = "epiz_26479022_php0707";
    $db_charset = "utf8mb4";

    date_default_timezone_set("Asia/Taipei");
    $now = date("Y-m-d H:i:s");
    
    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        // $dsn = "mysql:host=localhost;dbname=php0707;charset=utf8mb4";
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        echo $e->getMessage();
    }