<?php

/**
 * Return value between -1 e 1
 */
function _tanh($number) {
    return (2/(1 + exp(-2*$number)) -1);
}

/**
 * Function Derivation
 */
function derivation_tanh($number) {
    return (1- exp(_tanh($number)));
}