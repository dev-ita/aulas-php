<?php

// $handler = fopen('./teste.txt', 'r'); // r = read, w = write
// var_dump($handler);
//
// echo "<br>";
//
// while (!feof($handler)) { // enquanto não for o final do arquivo (file end of file)
//     echo fgets($handler, 4096) . "<br>";
// }

// $handler = fopen('./teste2.txt', 'w');
// fwrite($handler, "Linha 1" . PHP_EOL);
// fwrite($handler, "Linha 2" . PHP_EOL);
// fwrite($handler, "Linha 3" . PHP_EOL);
//
// fclose($handler);

// echo file_get_contents("./teste.txt");
// file_put_contents("./teste3.txt", "Olá Laravel")

// $arquivo = file("./teste2.txt");
//
// foreach ($arquivo as $key => $line) {
//     echo "{$key} {$line}" . "<br>";
// }

// copy("./teste2.txt", "./copy.txt");
// rename("./teste3.txt", "./novo.txt");
// unlink("./novo.txt");

if (file_exists("./teste.txtx")) {
    echo "arquivo existe<br>";
} else {
    echo "arquivo não existe<br>";
}

// mkdir("./novodir", 0777);
// rmdir("./novodir/");

$content = scandir("./");
print_r($content);


?>
