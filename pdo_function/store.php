<?php
    include("function.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    store($name,$mail,$phone,$gender);
    header("location:index.php");