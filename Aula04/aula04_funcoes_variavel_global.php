<?php

$nome = 'Aline dos Santos Silva';

function bemVindo ($nome = null)
{
	if ($nome){
		return "<h1> Bem Vindo(a) $nome </h1>";
	}

	global $nome;

	return "<h1> Bem Vindo(a) $nome </h1>";
}


echo bemVindo();