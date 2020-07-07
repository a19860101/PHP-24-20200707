<?php
//運算子
// 算術運算子
$x = 10;
$y = 6;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

//比較運算子
var_dump($x > $y);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
// var_dump($x !== $y);

//指定運算子(賦值運算子)
echo $x = $y;
echo "<br>";
echo $x += $y; // $x = $x + $y;
echo "<br>";
echo $x -= $y; // $x = $x - $y;
echo "<br>";
echo $x *= $y; // $x = $x * $y;
echo "<br>";
echo $x /= $y; // $x = $x / $y;
echo "<br>";
echo $x %= $y; // $x = $x % $y;
echo "<br>";

//邏輯運算子
/* 
    1. AND &&
    2. OR  ||
    3. NOT !
*/
$a = 0;
$b = 10;

var_dump($a > 0 && $b > 0);
echo "<br>";
var_dump($a > 0 || $b > 0);
echo "<br>";
var_dump(!isset($a));

//字串運算子

// echo "hello".$b;
echo "hello {$a}";