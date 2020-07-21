<?php
    require_once("conn.php");
    $id =  $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯資料</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">姓名</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row["name"];?>">
                </div>
                <div class="form-group">
                    <label for="">Mail</label>
                    <input type="text" name="mail" class="form-control" value="<?php echo $row["mail"];?>">
                </div>
                <div class="form-group">
                    <label for="">電話</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $row["phone"];?>">
                </div>
                <div class="form-group">
                    <label for="">性別</label>
                    <input type="radio" name="gender" value="男">
                    <label for="">男</label>
                    <input type="radio" name="gender" value="女">
                    <label for="">女</label>
                    <input type="radio" name="gender" value="不透漏">
                    <label for="">不透漏</label>
                </div>
                <input type="submit" class="btn btn-primary" value="編輯資料">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>