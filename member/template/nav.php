<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php if(!$_SESSION){ ?>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">登入</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="register.php">申請</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php">登出</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>