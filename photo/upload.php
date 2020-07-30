<?php
//    var_dump( $_FILES["img"] );
   $name = $_FILES["img"]["name"];
   $tmp_name = $_FILES["img"]["tmp_name"];
   $size = $_FILES["img"]["size"];
   $type = $_FILES["img"]["type"];
   $error = $_FILES["img"]["error"];
    // $target = "images/{$name}";

    switch($type){
        case "image/jpeg":
            $target = md5(time()).".jpg";
        break;
        case "image/png":
            $target = md5(time()).".png";
        break;
        case "image/gif":
            $target = md5(time()).".gif";
        break;
    }

    try{
        require_once("pdo.php");
        $sql = "INSERT INTO photos(path,create_at)VALUES(?,?)";
        $stmt = $pdo->prepare($sql);
        if($error == 0){
            if(move_uploaded_file($tmp_name,"images/".$target)){
                    echo  "上傳成功";
                    $stmt->execute([$target,$now]);
                    header("refresh:2;url=index.php");
            }else{
                echo "上傳失敗";
                header("refresh:2;url=index.php");
            }
        }else if($error == 4){
            header("location:index.php");
        }else{
            echo "上船錯誤";
            header("refresh:2;url=index.php");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }