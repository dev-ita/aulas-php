<?php

$nome = 'Ítalo';
$sobrenome = ' Oliveira';

// $nome_completo = $nome . $sobrenome;

$nome_completo = "{$nome} {$sobrenome}";

echo $nome_completo;

echo '<br>';

echo "\"xd\"";

echo '<br>';

echo strtoupper($nome . $sobrenome);
echo '<br>';
echo strlen($sobrenome);
echo '<br>';
echo substr($sobrenome, 5, 3);
echo '<br>';
echo substr($sobrenome, -3);
echo '<br>';
echo str_replace("a", "e", $sobrenome);

?>
