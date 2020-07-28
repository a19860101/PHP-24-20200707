<?php
    include("function.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $id = $_POST["id"];
    update($name,$mail,$phone,$gender,$id);
    header("location:index.php");