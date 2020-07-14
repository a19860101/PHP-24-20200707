<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="res.php" method="post">
        <div>
            姓名
            <input type="text" name="name">
        </div>
        <div>
            Mail
            <input type="text" name="mail">
        </div>
        <div>
            性別
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女
            <input type="radio" name="gender" value="不透漏">不透漏
        </div>
        <div>
            學歷
            <select name="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            專長
            <input type="checkbox" name="skills[]" value="平面設計">平面設計
            <input type="checkbox" name="skills[]" value="網頁設計">網頁設計
            <input type="checkbox" name="skills[]" value="3D動畫">3D動畫
            <input type="checkbox" name="skills[]" value="影片剪輯">影片剪輯
        </div>
        <input type="submit" value="送出">
    </form>
<!-- <h2>POST</h2>
    <form action="res.php" method="post">
        <input type="text" name="name">
        <input type="text" name="content">
        <input type="submit" value="送出">
    </form> -->
    <h2>GET</h2>
    <form action="res_get.php" method="get">
        <input type="text" name="name">
        <input type="text" name="content">
        <input type="submit" value="送出">
    </form>
    <?php
        // $a = ["name" => "John"];
        // // var_dump($a);
        // echo $a["name"];
    ?>
</body>
</html>