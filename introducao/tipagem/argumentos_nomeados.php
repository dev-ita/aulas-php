<?php

echo "-------------argumentos nomeados-----------<br>";

function calcula_juros_simples(float $valor, int $periodo, float $taxa = 10)
{
    return $valor + ($valor * $periodo) * ($taxa / 100);
}

// echo calcula_juros_simples(100, 5, 10);
// echo calcula_juros_simples(valor: 200, periodo: 5, taxa: 10) . "<br>";
echo calcula_juros_simples(periodo: 5, valor: 300, taxa: 50) . "<br>";

$array = array_fill(start_index: 0, count: 50, value: 'ABC');

print_r($array);
echo "<br>";

print str_repeat(string: ".o0o.", times: 10);
echo "<br>";

function gerar_saudacao(string $saudacao, string $nome, string $sobrenome = '', $tratamento = ''):string
{
    $frase = '';
    $frase .= $saudacao . ' ';
    
    if ($tratamento) {
        $frase .= $tratamento . ' ';
    }

    $frase .= $nome . ' ';

    if ($sobrenome) {
        $frase .= $sobrenome;
    }

    return $frase;
}

echo gerar_saudacao("Boa tarde", "Ítalo");
echo "<br>";
echo gerar_saudacao(saudacao: "Bom dia,", nome: "Ítalo.", tratamento: "senhor");
echo "<br>";

// array associativo
$args = ['saudacao' => 'Olá', 'nome' => 'Maria', 'sobrenome' => 'da Silva', 'tratamento' => 'Sra'];
print_r($args);
echo "<br>";
// unpacking
echo gerar_saudacao(...$args);

function teste(...$nums)
{
    print_r($nums);
}

echo "<br>";
teste(1, 2, 3, 4, 5);
