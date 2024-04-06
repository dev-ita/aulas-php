<?php
declare(strict_types=1);

echo "---------tipagem---------<br>";

$codigo = 5;
var_dump($codigo);
$codigo = "any text";
var_dump($codigo);

echo "<br>";
var_dump(321939219 . 8472874819);
echo "<br>";
var_dump(4.3 + 4);
echo "<br>";

echo "--------------------------<br>";

function calcula_imc(float $peso, float $altura) : float
{
    var_dump($peso, $altura);
    echo "<br>";
    return $peso / ($altura * $altura);
}

echo "seu IMC: " . number_format(calcula_imc(63, 1.80), 2) . "<br>";

?>
