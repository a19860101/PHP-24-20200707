<?php
    function showAll(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM students";
            //預備陳述式 prepare statement
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt -> fetch()){
                $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function show(){
        try{
            require_once("pdo.php");
            $id = $_GET["id"];
            $sql = "SELECT * FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($name,$mail,$phone,$gender){
        try {
            require_once("pdo.php"); 
            $sql = "INSERT INTO students(name,mail,phone,gender,create_at)VALUES(?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$mail,$phone,$gender,$now]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try {
            require_once("pdo.php");
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($name,$mail,$phone,$gender,$id){
        try {
            require_once("pdo.php");
            $sql = "UPDATE students SET name=?,mail=?,phone=?,gender=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$mail,$phone,$gender,$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }