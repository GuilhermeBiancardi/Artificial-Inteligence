<?php

include_once "mse.php";

$hypothesis = 1.543;

$interaction = Array (
    0.3, 0.5, 0.6, 0.1, 0.3
);

echo mse($hypothesis, $interaction);