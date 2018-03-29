<?php

$pessoa = [
	'nome' => 'Joyce de Oliveira',
	'email' =>' j@gmail.com.br',
	'cargo' => 'Analista de Sistemas'
];


echo '<pre>';
print_r($pessoa);
echo '<hr>';

$serial = serialize($pessoa);
echo $serial;

$array = unserialize($serial);
echo '<hr><pre>';
print_r($array);

echo '<hr>';
$num = 1032145;
echo serialize($num);

echo '<hr>';


printf(
	'Olá todos(as) %s bem vindo ao curso %s que iniciara em %s com carga horaria de %d horas',
		'Bruno Silva', '4500-PHP', '18-12-2018', 40
	);

echo '<hr>';


$string = sprintf(
	'Olá todos(as) %s bem vindo ao curso %s que iniciara em %s com carga horaria de %d horas',
		'Bruno Silva', '4500-PHP', '18-12-2018', 40
	);

echo 'Atenção ' . $string;




