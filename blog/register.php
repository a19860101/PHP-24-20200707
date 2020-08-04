<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h2>申請會員</h2>
            <form action="store.php" method="post">
                <div class="form-group">
                    <label for="">帳號</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">密碼</label>
                    <input type="password" name="pw" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="申請">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>