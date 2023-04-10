<pre>
<?php
    $results = array(
        "japanese"=>80,
        "english"=>88,
        "math"=>93,
        "science"=>91
    );
    foreach ($results as $subject=>$result) {
        echo $subject. ":" . "<h1>" . $result . "</h1>" . "<br>";
    }

    $numbers = array(4.3, 4.9, 3.7, 4.5);
    foreach($numbers as $key=>$num){
        $numbers[$key] = $num * 10;
    }
    $all = array_sum($numbers);
    $count = count($numbers);
    $average = $all/$count;
    echo "合計:" . $all . " " .  "平均:" . $average;

?>

</pre>