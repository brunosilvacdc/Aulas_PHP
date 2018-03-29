<?php
$retorno =`ls -la`;
echo  '<pre>';
echo '<hr>';
print_r ($retorno);

$server = `uname -a`;
echo '<hr>';
 echo $server;