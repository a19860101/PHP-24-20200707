<?php
    function store(){

    }
    function uploadImg($file){
        $type = $file["type"];
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
            default:
                return 'error';
        }
        $tmp_name = $file["tmp_name"];
        $error =$file["error"];
        $size = $file["size"];
        if($error == 0){
            if(move_uploaded_file($tmp_name,"images/".$target));
            return $target;
        }else{
            return "上傳失敗";
        }

    }