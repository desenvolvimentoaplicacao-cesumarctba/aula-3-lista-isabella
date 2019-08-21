<?php
include 'polyfill.php';

$temp=readline ("Digite a temperatura em Fahrenheit (ºF):") . PHP_EOL;
$grau=(($temp-32)*5)/9;

echo "A temperatura",$temp,"em Celsius é:",$grau;