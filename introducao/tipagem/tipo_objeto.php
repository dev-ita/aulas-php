<?php

function aplica_configuracao(object $configuracoes)
{
    date_default_timezone_set($configuracoes->timezone);
    $_SESSION['language'] = $configuracoes->language;

    echo "Aplicou configuracoes: {$configuracoes->timezone} e idioma: {$configuracoes->language}<br>";
}

$configs = new stdClass;
$configs->timezone = "America/Belém";
$configs->language = "pt_BR";

// aplica_configuracao($configs);
aplica_configuracao((object)parse_ini_file("config.ini"));

var_dump((object)parse_ini_file("config.ini"));
echo "<br>";

$teste = (object)parse_ini_file("config.ini");
echo $teste->timezone;

?>
