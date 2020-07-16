<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <input type="submit" value="上傳">
    </form>
    <?php
        $imgs = glob("images/*");
        // var_dump($imgs);
        $imgs_num = count($imgs);
        echo "<div>目前共有{$imgs_num}張圖片";
        foreach($imgs as $img){
    ?>
    <div>
        <img src="<?php echo $img?>" width="200">
        <a href="delete.php?img=<?php echo $img?>" onclick="return confirm('確認刪除？')">刪除</a>
    </div>
    <?php }?>
</body>
</html>