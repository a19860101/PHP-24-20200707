<?php
    include("function/user.php");
    $rows = showAllUsers();
?>
<?php include('template/header.php'); ?>
<?php include('template/nav.php'); ?>
<?php
    include("../function/security.php"); 
    onlyAdmin()
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>名稱</th>
                    <th>申請時間</th>
                    <th>層級</th>
                    <th>動作</th>
                </tr>
                <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["user"];?></td>
                    <td><?php echo $row["create_at"];?></td>
                    <td>
                        <?php 
                        
                            echo $row["level"] == 0 ? "管理員" : "一般會員";
                        
                        ?>
                    </td>
                    <td>
                        <form action="switchLevel.php" method="post">
                            <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                            <input type="hidden" value="<?php echo $row["level"];?>" name="level">
                            <?php if($row["id"] == $_SESSION["ID"]){ ?>
                            <input type="button" class="btn btn-dark" value="切換層級" disabled>
                            <?php }else{ ?>
                            <input type="submit" class="btn btn-info" value="切換層級">
                            <?php } ?>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include('template/footer.php'); ?>