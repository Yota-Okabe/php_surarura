<?php
// 引数のある関数
    // 引数　→ 与えるデータ
    // 戻り値　→　結果
    $greeting = "こんにちは";
    $count = mb_strlen($greeting);
    echo $count . "<br>\n";

// 引数のない関数
$now_time = time();
echo date( "Y/m/d" ) ;

// 戻り値を使わない関数
$fruits = array("apple", "lemon", "banana");
// echo sort($fruits);
print_r($fruits);




?>