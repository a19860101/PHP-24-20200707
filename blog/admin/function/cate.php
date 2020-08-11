<?php
    function showAllCates(){
        try {
            require("../pdo.php");
            $sql = "SELECT * FROM cates";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function storeCate($title,$slug){
        try {
            require_once("../pdo.php");
            $sql = "INSERT INTO cates (title,slug)VALUES(?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$slug]);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function deleteCate($id){
        try {
            require_once("../pdo.php");
            $sql = "DELETE FROM cates WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }