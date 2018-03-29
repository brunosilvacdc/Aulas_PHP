<?php
$codigoProduto = 10;

switch ($codigoProduto) {
    case 1:
        echo 'Produto: Mouse<br>Preço:15';
        break;
    case 2:
        echo 'Produto: MTeclado<br>Preço:25';
        break;
    case 3:
        echo 'Produto: NoteBook Core i7 8GBb<br>Preço:3500';
        break;
    default:
        echo ' Produto: Não cadastrado';
}