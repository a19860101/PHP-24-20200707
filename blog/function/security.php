<?php
    function onlyMember(){
        if(!$_SESSION){
            header('location:login.php?error=1');
        }
    }
    function onlyAdmin(){
        if(!$_SESSION || $_SESSION["LV"] != 0){
            header('location:../login.php?error=2');
        }
    }
