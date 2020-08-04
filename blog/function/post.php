<?php
    function showAllPosts(){
        try {
            require_once("pdo.php");
            $sql = "SELECT * FROM posts";
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
    function showPost(){

    }
    function storePost($title,$content,$c_id,$u_id){
        try {
            require_once("pdo.php");
            $sql = "INSERT INTO posts (title,content,c_id,u_id,create_at,update_at)VALUES(?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$c_id,$u_id,$now,$now]);
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    function updatePost(){

    }
    function deletePost(){

    }
    function uploadImg($file){
        $type = $file["type"];
        switch($type){
            case "image/jpeg":
                $name = md5(time()).".jpg";
            break;
            case "image/png":
                $name = md5(time()).".png";
            break;
            case "image/gif":
                $name = md5(time()).".gif";
            break;
            default:
                return 'error';
        }
        $tmp_name = $file["tmp_name"];
        $error =$file["error"];
        $size = $file["size"];
        $target = "images/".$name;
        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                imgResize($type,$target,$name);
                return $name;
            }
        }else{
            return "上傳失敗";
        }

    }
    function imgResize($type,$target,$name){
        switch($type){
            case "image/jpeg":
                $canvas = imagecreatefromjpeg($target);
            break;
            case "image/png":
                $canvas = imagecreatefrompng($target);
            break;
            case "image/gif":
                $canvas = imagecreatefromgif($target);
            break;
        }
        $canvas_w = imagesx($canvas);
        $canvas_h = imagesy($canvas);
        $new_w = 800;
        $new_h = $canvas_h / $canvas_w * $new_w;
        $new_canvas = imagecreatetruecolor($new_w,$new_h);
        imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);
        imagejpeg($new_canvas,"thumbs/".$name);
        imagepng($new_canvas,"thumbs/".$name);
        imagegif($new_canvas,"thumbs/".$name);
    }