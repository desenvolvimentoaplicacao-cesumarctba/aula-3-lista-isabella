<?php
include 'polyfill.php';

$temp=readline ("Digite a temperatura em Celsius (ºC):") . PHP_EOL;
$grau=$temp+273.15;

echo "A temperatura ",$temp," em Kelvin é:",$grau . PHP_EOL;