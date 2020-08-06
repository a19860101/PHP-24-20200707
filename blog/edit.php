<?php
    include("function/post.php");
    include("function/cate.php");
    $row = showPost($_GET["id"]);
    $cates = showAllCates();
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
                <div>
                <?php if($row["cover"] == "no-pic.png"){ ?>
                   
                    <input type="file" name="cover">
                   
                <?php }else{?>
                   
                    <img src="thumbs/<?php echo $row["cover"];?>" width="200">
                   
                <?php } ?>
                </div>
                <div class="form-group">
                    <label for="content">內文</label>
                    <textarea name="content" id="content" rows="10" class="form-control"><?php echo $row["content"];?></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">分類</label>
                    <select name="c_id" id="c_id" class="form-control">
                        <?php foreach($cates as $cate){ ?>
                        <option value="<?php echo $cate["id"];?>" <?php if($row["c_id"] == $cate["id"]){echo "selected";}?>>
                            <?php echo $cate["title"];?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>
<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>