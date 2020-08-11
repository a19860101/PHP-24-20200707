<?php
    include("function/cate.php");
    $rows = showAllCates();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<?php
    include("../function/security.php"); 
    onlyAdmin()
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <form action="storeCate.php" method="post">
                <div class="form-group">
                    <label for="title">分類名稱</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="slug">slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
                <input type="submit" class="btn btn-primary" value="新增分類">
            </form>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <?php foreach($rows as $row){ ?>
                <li class="list-group-item">
                    <?php echo $row["title"];?>
                    <form action="deleteCate.php" method="post" class="d-inline-block float-right">
                        <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm" onclick="return confirm('確認刪除？')">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('template/footer.php'); ?>