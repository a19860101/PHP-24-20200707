<?php
    include("function.php");
    $id = $_POST["id"];
    delete($id);
    header("location:index.php");