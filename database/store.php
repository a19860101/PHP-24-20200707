<?php
    require_once("conn.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO students(name,mail,phone,gender,create_at)
            VALUES('$name','$mail','$phone','$gender','$now')";

    mysqli_query($conn,$sql);

    header("Location:index.php");