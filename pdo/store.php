<?php
    try {
        require_once("pdo.php"); 
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];

        $sql = "INSERT INTO students(name,mail,phone,gender,create_at)VALUES(?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$mail,$phone,$gender,$now]);

        header("location:index.php");

    }catch(PDOException $e){
        echo $e->getMessage();
    }