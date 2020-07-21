<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>Mail</th>
                        <th>電話</th>
                        <th>性別</th>
                        <th>建立時間</th>
                    </tr>
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
            </div>
        </div>
    </div>

<?php include("template/footer.php");?>