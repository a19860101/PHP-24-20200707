<?php
//    var_dump( $_FILES["img"] );
   $name = $_FILES["img"]["name"];
   $tmp_name = $_FILES["img"]["tmp_name"];
   $size = $_FILES["img"]["size"];
   $type = $_FILES["img"]["type"];
   $error = $_FILES["img"]["error"];
    $target = "images/{$name}";

   if($error == 0){
       if(move_uploaded_file($tmp_name,$target)){
            echo  "上傳成功";
       }else{
           echo "上傳失敗";
       }
   }else if($error == 4){
       header("location:index.php");
   }else{
       echo "上船錯誤";
   }