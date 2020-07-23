<?php
    include("function.php");
    $row = show();
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>編輯資料</h2>
            <form action="update.php" method="post">
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
                    <input type="radio" name="gender" value="男" <?php if($row["gender"] == "男"){echo "checked";}?>>
                    <label for="">男</label>
                    <input type="radio" name="gender" value="女" <?php echo $row["gender"] == "女" ? 'checked':'';?>>
                    <label for="">女</label>
                    <input type="radio" name="gender" value="不透漏" <?php if($row["gender"] == "不透漏"){echo "checked";}?>>
                    <label for="">不透漏</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" class="btn btn-primary" value="編輯資料">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>