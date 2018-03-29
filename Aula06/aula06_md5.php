<?php

$md5 = md5 ('123456');
echo $md5;

echo '<br>';

$sha1 = sha1('123456');
echo $sha1;

echo '<br>';

$crypt = crypt('123456', 'minha aplicação');
$crypt1 = crypt('123456', 'novo teste');
$crypt2 = crypt('123456', 'mais um teste');
echo $crypt;
echo '<hr>';
echo $crypt1;
echo '<hr>';
echo $crypt2;