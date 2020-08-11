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

        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <?php foreach($rows as $row){ ?>
                <li class="list-group-item">
                    <?php echo $row["title"];?>
                    <form action="" method="post" class="d-inline-block float-right">
                        <input type="submit" value="刪除" class="btn btn-danger btn-sm">
                    </form>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<?php include('template/footer.php'); ?>