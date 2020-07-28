<?php
    function auth($user,$pw){
        try {
            require_once("pdo.php");
            session_start();
            if($user == '' || $pw == ''){
                header("location:login.php");
            }
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt->fetch();
            if($row["pw"] == $pw){
                $_SESSION["ID"] = $row["id"];
                $_SESSION["USER"] = $user;
                $_SESSION["LV"] = $row["level"];
                // echo "登入成功";
                // header("refresh:3;url=index.php");
                return 'success';
            }else{
                // echo "帳號或密碼錯誤";
                // header("refresh:3;url=index.php?error");
                return 'error';
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function logout(){
        session_start();
        session_destroy();
    }