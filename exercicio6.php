<?php
include 'polyfill.php';

$alt=readline ("Digite sua altura:") . PHP_EOL;
$peso=readline ("Digite seu peso:") . PHP_EOL;
$altura=$alt*$alt;
$imc=$peso/$altura;

if ($imc<18.5)
{
    echo "O seu IMC é:",$imc . PHP_EOL;
    echo "Você está abaixo do peso!" . PHP_EOL;
}
elseif ($imc>18.5) and ($imc<24.9)
    {
    echo "O seu IMC é:",$imc . PHP_EOL;
    echo "Você está com o peso normal!" . PHP_EOL;
    }
    elseif ($imc>25) and ($imc<29.9)
        {
            echo " O seu IMC é:",$imc . PHP_EOL;
            echo "Você está com sobrepeso!" . PHP_EOL;
        }
        elseif ($imc>30) and ($imc<34.9)
            {
                echo "O seu IMC é:",$imc . PHP_EOL;
                echo "Você está com Obesidade grau 1!" . PHP_EOL;
            }
            elseif ($imc>35) and ($imc<39.9)
                {
                    echo "O seu IMC é:",$imc . PHP_EOL;
                    echo "Você está com Obesidade grau 2!" . PHP_EOL;
                }
                elseif ($imc>40)
                    {
                        echo "O seu IMC é:",$imc . PHP_EOL;
                        echo "Você está com Obesidade grau 3!" . PHP_EOL;
                    }