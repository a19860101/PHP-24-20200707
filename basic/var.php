<?php
    //變數 
    /*
        1. 首字不可為數字
        2. 大小寫有別
        3. 符號只可使用底線
    */
    $x = 100;
    $y = 50;
    // $s = "HELLO STRING $x";
    // $s = "HELLO STRING {$x}";
    $s = "HELLO STRING".$x;
    $s2 = 'HELLO STRING 2 {$x}';
    $b = false;
    echo $s2;
    //常數
    define("QQQ",123456789);
    echo QQQ;
    /* 
        資料型態
        1. 數值 int,float
        2. 字串 string
        3. 布林 boolean   -> true(1),false(0) 
    */

?>