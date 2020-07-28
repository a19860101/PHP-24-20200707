<?php
    session_start();
    // session_destroy();
    unset($_SESSION["USER"]);

    echo "session 已銷毀";
    header("refresh:3;url=index.php");