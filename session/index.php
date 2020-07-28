<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="送出">
    </form>
    <?php
        if($_SESSION){
            echo $_SESSION["USER"];
        }
    ?>
</body>
</html>