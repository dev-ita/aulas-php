<?php

echo "---------strings-----------:<br>";

$nome = "Ítalo";
$sobrenome = "Oliveira";

print $nome . " " . $sobrenome . "<br>";
print "{$nome} {$sobrenome}<br>";

$nome_completo = $nome . " " . $sobrenome;

print $nome_completo . "<br>";

print "ítalo\"Oliveira {$sobrenome}<br>";

echo "---------numeros-----------:<br>";

$a = 4.5;
$b = '5.5';

var_dump($a + $b);
echo "<br>";

echo "---------variaveis-----------:<br>";
$a = 5;
$b = &$a; // passando uma referência
$a = 10;

var_dump($a);
var_dump($b);
echo "<br>";

$conteudo = "";
if (!empty($conteudo)) {
    echo "conteúdo<br>";
}

$peso = 30;
$multa = ($peso > 25);

if ($multa) {
    echo "multa<br>";
}

var_dump($multa);
echo "<br>";

$lista = ["nome" => "banana", "preco" => 10.5];
var_dump($lista);
echo "<br>";

// criando um objeto
$pessoa = new stdClass; // stdClass nos retorna um Objeto vázio (standard class)
$pessoa->nome = "italo";
$pessoa->altura = 1.80;

var_dump($pessoa);
echo "<br>";

$pessoa2 = $pessoa; // Objetos são sempre tratados como referência, então aqui estou passando uma ref
$pessoa2->nome = "League of Legends"; // vai alterar globalmente, ja que é uma referência

var_dump($pessoa->nome);
echo "<br>";

var_dump($pessoa);
echo "<br>";

var_dump($pessoa2);
echo "<br>";
?>
