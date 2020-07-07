<?php
    $x =0;
    $y = 100;
    // if
    if($x == 0){
        echo "GOGO";
    }
    // if...else
    if($x > 0){
        echo "SUCCESS";
    }else{
        echo "ERROR";
    }
    // if...elseif
    if($x > 100){
        echo ">100";
    }elseif($x > 80){
        echo ">80";
    }elseif($x > 60){
        echo ">60";
    }else{
        echo "error";
    }
    echo "<br>";
    //switch

    switch($x){
        case 0:
            echo 0;
        break;
        case 1:
            echo 1;
        break;
        case 2:
            echo 2;
        break;
        default:
            echo "error";
    }

    switch(true){
        case $x > 0:
            echo "正數";
        break;
        case $x < 0:
            echo "負數";
        break;
        default:
            echo "error";
    }

?>