<?php
declare(strict_types=1);

echo "------------União de tipos-----------<br>";

function calcula_juros_simples(int|float $valor, int|float $periodo, int|float $taxa): float
{
    return $valor + ($valor * $periodo) * ($taxa / 100);
}

function soma_data($data_base, DateInterval | int $interval)
{
    $date = new DateTime($data_base);

    if ($interval instanceof DateInterval) {
        var_dump($interval);
        echo "<br>";
        $date->add($interval);
    } else {
        $date->add(new DateInterval("P".$interval."D"));
    }
    return $date->format("Y-m-d");
}

echo calcula_juros_simples(100.5, 5, 10);
echo "<br>";
echo soma_data('2024-04-2', 5);
echo "<br>";
echo soma_data('2024-04-2', new DateInterval('P8M'));
echo "<br>";

class Turma
{
    private int $id;
    private int $dia_semana;
    private int|string $sala;

    public function setNumeroSala(int|string $sala)
    {
        $this->sala = $sala;
    }
}

$turma = new Turma;
$turma->setNumeroSala("número cinco");
var_dump($turma);
echo "<br>";

?>
