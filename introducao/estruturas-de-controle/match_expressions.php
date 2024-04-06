<?php

$codigo = 10;

$status = match($codigo) {
    1=> "Iniciado",
    2 => "Em atendimento",
    3 => teste(),
    default => "Não encontrado!",
};

function teste()
{
    echo "Hello<br>";
}

echo $status;

?>
