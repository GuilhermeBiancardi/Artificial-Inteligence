<?php

/**
 * Calc Error Quadratic Medium
 */
function mse($expectedResponse, $arrayInteractionErrorExit) {
    $arrayErrorQuadratic = Array();
    foreach($arrayInteractionErrorExit as $interaction) {
        $arrayErrorQuadratic[] = pow($expectedResponse - $interaction, 2);
    }
    // $sizeOfInteractions = count($arrayErrorQuadratic);
    $errorQuadraticMedium = array_sum($arrayErrorQuadratic);
    return $errorQuadraticMedium;
}