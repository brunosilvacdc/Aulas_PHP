<?php


$retorno = setcookie('valor','PHP');
var_dump($retorno);

sleep(10);


header('location: http://google.com');