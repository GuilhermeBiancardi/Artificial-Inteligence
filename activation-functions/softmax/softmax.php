<?php

function softmax(array $arr){

    $arr = array_map('exp', array_map('floatval', $arr));
    $sum = array_sum($arr);

    foreach($arr as $index => $value) {
        $arr[$index] = $value/$sum;
    }

    return $arr;
}