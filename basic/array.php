<?php
    //array

    // $a = array();
    // $a[0] = "紅茶";
    // $a[1] = "綠茶";
    // $a[2] = "奶茶";
    // echo $a[0],$a[1],$a[2];

    // $b = array("紅茶","綠茶","乃茶");
    // echo $b[0].$b[1].$b[2];

    // $c = ["紅茶","綠茶","珍珠奶茶"];
    // echo $c[0].$c[1].$c[2];

    // var_dump($c);

    $a = ["紅茶","綠茶","奶茶","珍珠奶茶","梅子綠茶","草莓芝芝 "];
    // var_dump($a);
    // echo count($a);
    // for($i=0;$i<count($a);$i++){
    //     echo $a[$i];
    // }

    //排序
    // sort($a);
    // rsort($a);
    // shuffle($a);

    //陣列迭代
    // foreach($a as $drink){
    //     echo $drink;
    // }
    echo "<br>";
    //關聯陣列

    $drinks = ["紅茶"=>20,"綠茶"=>20,"奶茶"=>30,"珍珠奶茶"=>40];

    // var_dump($drinks);
    // echo $drinks["紅茶"];
    // echo $drinks["珍珠奶茶"];
    ksort($drinks);
    krsort($drinks);
    asort($drinks);
    arsort($drinks);

    foreach($drinks as $key => $value){
        echo $key.":".$value."元";
        echo "<br>";
    }
    $x = 0;
    //in_array
    var_dump(in_array("紅茶",$a));
    var_dump(in_array("烏龍茶",$a));

    //is_array
    var_dump(is_array($a));
    var_dump(is_array($x));
    echo "<br>";
    
    //compact

    $user = "John";
    $mail = "john123@gmail.com";
    $gender = "male";

    // $user_info = [$user,$mail,$gender];
    $user_info = compact("user","mail","gender");
    var_dump($user_info);

    //extract

    // var_dump(extract())
    $users = ["name"=>"John","mail"=>"john@gmail.com","gender"=>"male"];
    extract($users);
    echo $name,$mail,$gender;
    echo "<br>";
    
    //implode 集中 陣列->字串
    $a_str = implode("__",$a);
    echo $a_str;
    echo "<br>";

    //explode 爆炸 字串->陣列
    $s = "紅茶__綠茶__奶茶__珍珠奶茶__梅子綠茶__草莓芝芝";
    $s_array = explode("__",$s);
    var_dump($s_array);