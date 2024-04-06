<?php

$valor = 100;
$valor += 5;

$teste = $valor++;

echo $teste;
echo "<br>";
echo $valor;
echo "<br>";
echo (5 + 5) * 5;
echo "<br>";
echo 5 + 5 / 2;

$salario = 500;
$cargo = 'programador';

echo "<br>";

if (!($salario > 500 || $cargo == 'gerente') ) {
    echo 'ok';
}

?>
