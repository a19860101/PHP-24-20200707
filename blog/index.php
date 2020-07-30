<?php include("template/header.php");?>
<?php include("template/nav.php");?>

<?php include("function/post.php"); ?>

<?php
    $rows = showAllPosts();
    foreach($rows as $row){
        echo $row["title"];
        echo "<br>";
    }
?>


<?php include("template/footer.php");?>