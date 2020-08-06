<?php
    try {
        require_once("pdo.php");
        unlink("images/".$_GET["cover"]);
        unlink("thumbs/".$_GET["cover"]);
        $cover = "no-pic.png";
        $id = $_GET["id"];
        $sql = "UPDATE posts SET cover = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$cover,$id]);
        header("location:edit.php?id=".$_GET["id"]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }