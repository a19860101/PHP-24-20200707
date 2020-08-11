<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>登入</h2>
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="">帳號</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">密碼</label>
                    <input type="password" name="pw" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="登入">
            </form>
        </div>
    </div>
</div>
<?php if(isset($_GET['error']) && $_GET['error'] == 1){ ?>
<div class="alert alert-danger" role="alert">
    <?php echo "請登入會員"; ?>
</div>
<?php } ?>

<?php include("template/footer.php");?>