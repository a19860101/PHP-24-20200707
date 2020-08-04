<?php
    include("function/user.php");
    $user = $_POST["user"];
    $pw = $_POST["pw"];
    $regi = register($user,$pw);
    switch($regi){
        case 0:
            echo "帳號申請成功，請重新登入";
            header("refresh:3;url=login.php");
        break;
        case 1:
            echo "帳號已被使用，請重新申請";
            header("refresh:3;url=register.php");
        break;
    }