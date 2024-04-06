<?php
declare(strict_types=1);

echo "------------tipos anuláveis-----------<br>";

function create_link(string $action, ?string $label): string
{
    // $label ou null;
    $label = $label ?? "Texto genérico";
    return "<a href='$action'>$label</a>";
}

echo create_link("tipagem.php", null);

?>
