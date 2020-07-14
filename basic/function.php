<?php

    function test(){
        $x = 'hello';
        echo $x;
    }
    // test();
    function test2($x,$y){
        echo $x + $y;
    }
    // test2(123,123);
    function test3($x = 0){
        echo $x;
    }
    // test3();
    // test3("Hello PHP");

    function cal($x){
        return $x * $x;
    }
    
    $num = cal(12);
    echo $num;
    