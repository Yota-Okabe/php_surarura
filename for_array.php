<pre>
<?php

    $students = [
        "はるき",
        "かずき",
        "まさき",
        "ちあき",
        "たいき"
    ];
    $count = count($students);
    echo $count . "<br>";

    for ($i=0; $i<$count ; $i++) { 
        echo $students[$i] . "<br>";
    }

?>
</pre>