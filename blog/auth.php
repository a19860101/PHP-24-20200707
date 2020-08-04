<?php
    include("function/user.php");
    $auth = auth($_POST["user"],$_POST["pw"]);
    // if($auth == 'success'){
    //     header("location:index.php");
    // }else{
    //     header("location:login.php");
    // }
    switch($auth){
        case 'success':
            header("location:index.php");
        break;
        case 'empty':
            header("location:login.php?err=empty");
        break;
        case 'error':
            header("location:login.php?err=err");
        break;
    }

