<?php
include 'polyfill.php';

$tempo=readline ('Digite o tempo gasto na viagem:' . PHP_EOL); 
$velocidade=readline ('Informe a velocidade média:' . PHP_EOL); 
$distancia=$tempo*$velocidade;
$litros=$distancia/12;

echo "A velocidade média durante a viagem foi de: $velocidade" . PHP_EOL;
echo "O tempo gasto durante a viagem foi de : $tempo" . PHP_EOL;
echo "A distância percorrida na viagem foi de: $distancia" . PHP_EOL;
echo "A quantidade de litros utilizada durante a viagem foi: $litros" . PHP_EOL;
