<?php
    session_start();
    $user = $_POST["user"];
    $_SESSION["USER"] = $user;

    echo "session 已儲存";
    header("refresh:3;url=index.php");