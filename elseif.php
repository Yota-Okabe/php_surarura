<?php
    $age = 30;

    if ($age < 20) {
        echo "購入不可";
    }elseif ($age <= 23) {
        echo "年齢確認";
    }else{
        echo "ご購入ありがとうございます。" . "<br>";
    }

    // 順番を間違えると意図と反した挙動となる
    if ($age >= 10) {
        echo '10歳以上';
    }elseif ($age >= 30) {
        echo '30歳以上';
    }

?>