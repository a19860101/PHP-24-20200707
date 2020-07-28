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