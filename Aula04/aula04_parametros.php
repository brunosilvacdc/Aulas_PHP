<?php

function trocarEstilo($string, $estilo = 'b'){
	return "<$estilo> $string </$estilo>";
}
echo trocarEstilo ( 'Trabalhando com Funções', 'i');
echo '<br>';
echo trocarEstilo ('Trabalhando com Funções');