<pre>
<?php 
    $true = TRUE;
    $false = FALSE;

    $a = !$true;
    $b = !$false;
    $c = !$true && !$true;
    $d = !($true && $false);
    var_dump($a,$b,$c,$d);


?>