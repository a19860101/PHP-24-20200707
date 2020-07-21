<?php
    require_once("conn.php");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php while($row=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["mail"];?></td>
            <td><?php echo $row["phone"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["create_at"];?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>