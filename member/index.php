<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if($_SESSION){ ?>
            <div><?php echo $_SESSION["USER"];?>你好</div>
            <?php }else{ ?>
            <div>訪客你好</div>
            <?php }?>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>