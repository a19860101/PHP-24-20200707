<?php
    try{
        require_once("pdo.php");
        $id = $_POST["id"];
        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        header("location:index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    // try{
    //     require_once("pdo.php");
    //     $id = $_POST["id"];
    //     $sql = "DELETE FROM students WHERE id = :id";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->bindParam(":id",$id);
    //     $stmt->execute();
    //     header("location:index.php");
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }