<?php

vprintf('Olá Aluno(a) %s .' . "<br>" . 'O curso %s iniciara em %s .' . "<br>" . ' Você precisa ter no minimo: %d porcento de aproveitamento.', 
			['Raquel de Oliveira', '4501-PHP', '18-12-2018' , 85]

	);


echo '<hr>';

$string = '<h1><s> Titulo </h1></s> <p>paragrafo</p>';

$specialchar =  htmlspecialchars($string);

echo $specialchar;

echo '<hr>';

$strip = strip_tags($string, '<s>');

echo $strip;


