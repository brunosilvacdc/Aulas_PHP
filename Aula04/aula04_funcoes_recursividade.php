<?php

//Fatorial de um número !5 = 5 * 4 * 3 * 2 * 1;

function fatorial($numero){
	if ($numero > 0){
	return $numero * Fatorial ($numero -1);
}

	return true;
	}

	echo fatorial(0);