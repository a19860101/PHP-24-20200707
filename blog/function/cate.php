<?php
    function showAllCates(){
        try {
            require_once("pdo.php");
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