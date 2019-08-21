<?php
include 'polyfill.php';

$grau=readline ("Digite a temperatura em Celsius (ºC):") . PHP_EOL;
$temp=((9*$grau)+160)/5

echo "A temperatura",$grau,"em Fahrenheit é:",$temp . PHP_EOL;