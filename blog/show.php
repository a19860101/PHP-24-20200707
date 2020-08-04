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
                作者:<?php echo $row["u_id"];?>
                分類:<?php echo $row["c_id"];?>
            </div>
            <div class="content">
                <?php echo $row["content"]; ?>
            </div>
            <div>最後更新時間:<?php echo $row["update_at"];?></div>
            <form action="delete.php" method="post" class="d-inline-block">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" class="btn btn-danger" value="刪除文章">
            </form>
            <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯文章</a>
        </div>
    </div>
</div>




<?php include("template/footer.php");?>