<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        echo $row["id"];
        echo $row["name"];
        echo $row["phone"];
        echo $row["mail"];
        echo $row["gender"];
        echo $row["create_at"];
        echo "<br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>