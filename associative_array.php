<pre>
<?php
    $result = array(
        "japanese"=>80,
        "english"=>68,
        "history"=>75
    );

    $result2 = [
        "math"=>63,
        "science"=>66
    ];
    var_dump($result,$result2);
    $all = array_sum($result) + array_sum($result2);
    echo "合計点:". $all . "<br>\n";

    // 先生の採点が間違っていたので修正
    $result["japanese"] = 83;
    $result2["math"] = 68;
    var_dump($result,$result2);
    $all2 = array_sum($result) + array_sum($result2);
    echo "合計点:". $all2 . "<br>\n";

?>
</pre>

