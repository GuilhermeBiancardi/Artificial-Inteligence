<?php

include_once "softmax.php";

$a = Array(1.0, 2.0, 3.0, 4.0, 1.0, 2.0, 3.0);

$s = softmax($a);

print_r($s);