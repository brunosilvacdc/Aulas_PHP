<?php
$variavelGlobal = 'Variavel Global';

$clousure = function ($variavel = 'Parametro Passado') use ($variavelGlobal){
	$variavelLocal = 'Variavel Local';
	echo "<h1>$variavelGlobal</h1>";
	echo "<h1>$variavel</h1>";
	echo "<h1>$variavelLocal</h1>";
};

$clousure();