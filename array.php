<pre>
<?php

$friends = array("はるき", "かおる", "ひでと");
var_dump($friends);

$friends2 = ["はるき", "かおる", "ひでと"];
var_dump($friends2);

$friends[] = "まさとし";
var_dump($friends);

$friends[5] = "かずき";
$friends[2] = "たけし";
var_dump($friends);

?>