<?php

include_once "relu.php";

echo reLu(5) . " - " . derivation_reLu(5);

echo leakyReLu(5, 0.01) . " - " . derivation_leakyReLu(5, 0.01);
