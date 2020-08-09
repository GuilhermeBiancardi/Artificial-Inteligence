<?php

/**
 * Return 0 or 1 used to disable or keep a neuron active.
 */

function limiar($number) {
    return $number < 0 ? 0 : 1;
}