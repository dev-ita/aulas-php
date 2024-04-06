<?php

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

// echo calcula_imc(63, 1.80);

function km2milhas($km)
{
    global $total;

    $total += $km;

    return $km * 0.6;
}

// km2milhas(100);
// km2milhas(100);
// km2milhas(100);
//
// echo $total;

function percorre($km)
{
    static $total;
    $total += $km;
    echo "percorreu mais $km de $total<br>";
}

// percorre(100);
// percorre(100);
// percorre(100);

function incrementa(&$variavel, $valor)
{
    $variavel += $valor;
}

$teste = 100;
incrementa($teste, 20);

echo $teste;

echo "<br>";

$lista = ['a', 'c', 'b'];
sort($lista);
print_r($lista);

echo "hi<br>";

$remove_acento = function (string $str): string {
    return str_replace(['á','é','í','ó','ú'], ['a','e','i','o','u'], $str);
};

$sum = fn($x, $y) => $x + $y;

echo $remove_acento("ítálo<br>");
echo $sum(10, 10);
echo "<br>";

function teste(callable $callback, string $str): string
{
    $str = $callback($str);
    return strtoupper($str);
}

echo teste($remove_acento, "bábébíbóbú")


?>
