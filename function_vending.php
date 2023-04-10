<?php

    function vending_machine($price, $juice){
        if ($price>=150) {
            return $juice . "、お買い上げありがとうございます<br>";
        }else{
            return $price . "円では" . $juice . "は購入できません<br>";
        }
    }

    echo vending_machine(150, "オレンジ100％");
    echo vending_machine(100, "リンゴ100％");

    $price = 100;
    $juice = "パイナップル100％";
    echo vending_machine($price, $juice);

?>