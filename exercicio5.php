<?php
include 'polyfill.php';

$temp=readline ("Digite a temperatura em Fahrenheit:") . PHP_EOL;
$grau=(($temp-32)*5)/9;
$temp2=$grau+273.15;

echo "A temperatura",$temp,"em Fahrenheit, corresponde á",$temp2," em Kelvin." . PHP_EOL;