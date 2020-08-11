<?php
    try {
        require_once("../pdo.php");
        if($_POST["level"] == 0){
            $level = 1;
        }else{
            $level = 0;
        }
        $id = $_POST["id"];
        $sql = "UPDATE users SET level = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$level,$id]);
    }catch(PDOException $e){
        return $e->getMessage();
    }

    header("location:index.php");