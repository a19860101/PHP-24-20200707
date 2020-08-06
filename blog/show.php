<?php 
    include("function/post.php"); 
    $row = showPost($_GET["id"]);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <div class="col-12 my-3">
            <h2><?php echo $row["title"]; ?></h2>
            <div>
                作者:<?php echo $row["user"];?>
                分類:<?php echo $row["c_title"];?>
            </div>
            <div class="content">
                <?php echo $row["content"]; ?>
            </div>
            <div>最後更新時間:<?php echo $row["update_at"];?></div>
            <?php 
                if($_SESSION){     
                    if($row["u_id"] == $_SESSION["ID"]){ 
            ?>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="hidden" name="cover" value=<?php echo $row["cover"]; ?>>
                <input type="submit" class="btn btn-danger" value="刪除文章" onclick="return confirm('確認刪除？')">
            </form>
            <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯文章</a>
            <?php } }?>
        </div>
    </div>
</div>




<?php include("template/footer.php");?>