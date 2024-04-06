<?php

$salario = 8000;
$tempo = 12;

if ($salario < 1000 && $tempo >= 12) {
    echo "Promovido!<br>";
} else {
    echo "Sem promoção!<br>";
}

$valor_venda = 100;
$resultado = ($valor_venda > 100) ? "Muito caro!" : "Pode comprar";

var_dump($resultado);
echo "<br>";

$cont = 1;
while($cont <= 5) {
    echo $cont . " ";
    $cont++;
}

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo "{$i}<br>";
}

$tipo = "pdf";

switch ($tipo) {
case 'pdf':
    echo "pdf<br>";
    break;
case 'doc':
    echo "doc<br>";
    break;
default:
    echo "default<br>";
}

$lista = ['maça', 'banana', 'uva'];

foreach ($lista as $index => $fruta) {
    echo "{$index} {$fruta}" . " ";
}

echo "<br>";

?>
