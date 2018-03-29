<?php



function entenderReferencia(&$idadeFuncao){
	 $idadeFuncao++;
}

$idadeReferencia = 19;

entenderReferencia ($idadeReferencia);

echo $idadeReferencia;
