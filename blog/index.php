<?php 
    include("function/post.php"); 
    $rows = showAllPosts();

?>

<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <?php foreach($rows as $row){ ?>
        <div class="col-12 my-3">
            <h2><?php echo $row["title"]; ?></h2>
            <div>
                作者:<?php echo $row["user"];?>
                分類:<?php echo $row["c_title"];?>
            </div>
            <div class="content">
                <?php echo $row["content"]; ?>
                <a href="show.php?id=<?php echo $row["id"];?>">繼續閱讀...</a>
            </div>
            <div>最後更新時間:<?php echo $row["update_at"];?></div>
        </div>
        <?php } ?>
    </div>
</div>




<?php include("template/footer.php");?>