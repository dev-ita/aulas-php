<h1>Hello PHP</h1>

<?php

// variável
$numero_secreto = 469;
$array = [5, 4, 3, 2, 1];
sort($array);

echo "meu script php8<br>";

if ($numero_secreto == 469) {
    echo "O número secreto é: $numero_secreto<br>";
}

sayAny("versão do php: " . phpversion());

var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";

function sayAny(string $any)
{
    echo "$any<br>";
}

?>
