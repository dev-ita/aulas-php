<?php

class Produto
{
    public string $nome;
    public int|float $preco;

    function __construct(string $nome, float|int $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

$produtos = [new Produto("Maçã", 7.90), new Produto("Banana", 10.50), new Produto("Uva", 5.50)];

$filtro = array_filter(
    $produtos, function (Produto $item) {
        return $item->preco > 6.50;
    }
);

$nomes = array_map(
    function (Produto $produto) {
        return $produto->nome;
    }, $produtos
);

print_r($filtro);
echo "<br>";
print_r($nomes);


?>
