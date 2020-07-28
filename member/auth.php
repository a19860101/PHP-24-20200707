<?php
    include("function.php");
    $auth = auth($_POST["user"],$_POST["pw"]);
    if($auth == 'success'){
        header("location:index.php");
    }else{
        header("location:login.php");
    }

