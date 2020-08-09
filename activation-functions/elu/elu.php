<?php

/**
 * ELU
 */
function elu($number, $aprendizagem) {
    return $number >= 0 ? $number : ($aprendizagem*(exp($number) -1));
}

/**
 * Function Derivation
 */
function derivation_elu($number, $aprendizagem) {
    return $number >= 0 ? $number : (elu($number, $aprendizagem) + $aprendizagem);
}