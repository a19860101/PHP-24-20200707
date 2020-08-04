<?php 
    include("function/cate.php");
    $cates = showAllCates();
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form action="store.php" method="post">
                <div class="form-group">
                    <label for="title">標題</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">內文</label>
                    <textarea name="content" id="content" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">分類</label>
                    <select name="c_id" id="c_id" class="form-control">
                        <?php foreach($cates as $cate){ ?>
                        <option value="<?php echo $cate["id"];?>"><?php echo $cate["title"];?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>