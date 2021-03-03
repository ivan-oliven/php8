<?php
//Conforme parametrizado, o autoload vai trazer todas as minhas classes que estão na 
// pasta App
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto;
$produto->setNome("CPU com LED");
$produto->setDescricao("Deixe incrível sua experiência com jogos");

$produtoDAO = new \App\Model\ProdutoDao;
$produtoDAO-> delete(4);

foreach($produtoDAO->read() as $p){

echo $p["nome"]."<br>".$p["descricao"]."<hr>";
}


