<?php

/**
 * Return value between 0 and 1
 */
function sigmoid($number) {
    return (1/(1 + exp(-$number)));
}

/**
 * Function Derivation
 */
function derivation_sigmoid($number) {
    $sigmoid = sigmoid($number);
    return ($sigmoid * (1 - $sigmoid));
}