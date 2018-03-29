<?php

$pessoa =[
	'nome'=> 'Gabriela Oleveira',
	'email' => ' gabi.oli@gmail.com',
	'cargo' => 'Analista de TI'
];

$chaves =  array_keys($pessoa);
$valores = array_values($pessoa);

echo '<pre>';
print_r($chaves);
echo '<br>';
print_r($valores);
echo '<hr>';


$produtos = [
	'mouse',
	'teclado',
	'notebook',
	'monitor',
	'mouse',
	'teclado',
	'hd',
	'zebra'
];
echo '<hr>';
sort($produtos);
print_r($produtos);

$implode = implode(',',$produtos);
echo $implode;


$explode = explode(',', $implode);
echo '<hr>';
print_r($explode);


$implode1 = implode(',',$pessoa);
echo $implode1;
