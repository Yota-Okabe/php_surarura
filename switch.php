<?php

    $i="30";
    if ($i<=10) {
        echo "if構文:iは10以下<br>";
    }elseif ($i>10 && $i<=20) {
        echo "if構文:iは10以上20以下<br>";
    }else{
        echo "if構文:どちらでもない<br>";
    }

    switch ($i) {
        case $i<=10:
            echo "switch構文:iは10以下<br>";
            break;
        case $i>10 && $i<=20:
            echo "switch構文:iは10以上20以下<br>";
            break;
        default:
            echo "switch構文:どちらでもない<br>";
            break;
    }


?>