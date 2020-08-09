<?php

/**
 * reLu
 */
function reLu($number) {
    return max(0, $number);
}

/**
 * Function Derivation
 */
function derivation_reLu($number) {
    return $number >= 0 ? 1 : 0;
}

/**
 * Leaky reLu
 */
function leakyReLu($number, $aprendizagem) {
    return $number < 0 ? ($aprendizagem*$number) : $number;
}

/**
 * Function Derivation
 */
function derivation_leakyReLu($number, $aprendizagem) {
    return $number >= 0 ? 1 : $aprendizagem;
}