<?php

    include 'function_vending_include.php';

    echo vending_machine(150, "オレンジ100％");
    echo vending_machine(100, "リンゴ100％");

    $price = 100;
    $juice = "パイナップル100％";
    echo vending_machine($price, $juice);


?>