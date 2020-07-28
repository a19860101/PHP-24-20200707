<?php
    try {
        require_once("pdo.php");
        session_start();
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        $sql = "SELECT * FROM users WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch();
        if($row["pw"] == $pw){
            $_SESSION["ID"] = $row["id"];
            $_SESSION["USER"] = $user;
            $_SESSION["LV"] = $row["level"];
            echo "登入成功";
            header("refresh:3;url=index.php");
        }else{
            echo "帳號或密碼錯誤";
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }