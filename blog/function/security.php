<?php
    function onlyMember(){
        if(!$_SESSION){
            header('location:login.php?error=1');
        }
    }
