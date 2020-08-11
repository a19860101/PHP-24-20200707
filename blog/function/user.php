<?php
    function auth($user,$pw){
        try {
            require_once("pdo.php");
            session_start();
            if($user == '' || $pw == ''){
                return 'empty';
            }
            $sql = "SELECT * FROM users WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt->fetch();
            if($row["pw"] == $pw){
                $_SESSION["ID"] = $row["id"];
                $_SESSION["USER"] = $user;
                $_SESSION["LV"] = $row["level"];
                return 'success';
            }else{
                return 'error';
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function logout(){
        session_start();
        session_destroy();
    }
    function register($user,$pw){
        try {
            require_once("pdo.php");
            $sql_check = "SELECT * FROM users WHERE user = ?";
            $stmt_check = $pdo->prepare($sql_check);
            $stmt_check->execute([$user]);
            $row_num = $stmt_check->rowCount();
            if($row_num > 0){
                return 1;
            }
            $sql = "INSERT INTO users (user,pw,create_at)VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw,$now]);
            return 0;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
