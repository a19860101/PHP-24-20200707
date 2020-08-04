<?php
    include("function/post.php");
    $row = showPost($_GET["id"]);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="title">標題</label>
                    <input type="text" id="title" name="title" class="form-control" value=<?php echo $row["title"];?>>
                </div>
                <div class="form-group">
                    <label for="content">內文</label>
                    <textarea name="content" id="content" rows="10" class="form-control"><?php echo $row["content"];?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>