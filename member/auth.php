<?php
    include("function.php");
    auth($_POST["user"],$_POST["pw"]);
    header("location:index.php");
