<?php
//O trabalho com sessão exige que a mesma seja preparada, para isso usamos a função session_start;
session_start();

$_SESSION['nome'] = 'Bruno Silva dos Santos';
$_SESSION['email'] = 'bruno@gmail.com.br';

echo '<pre>';
print_r($_SESSION);

