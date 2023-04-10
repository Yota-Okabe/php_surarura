<pre>
<?php

    $result = array(
        "japanese"=>85,
        "english"=>74,
        "math"=>78,
        "science"=>80
    );
    $students = array("Haruki"=>$result);
    var_dump($students);

    $students2["Tkeshi"] = array(
        "japanese"=>90,
        "english"=>92,
        "math"=>91,
        "science"=>97
    );
    var_dump($students2);

?>
</pre>