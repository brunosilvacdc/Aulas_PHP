<?php

$teste = 1;

if (isset($teste)){
	echo "a variavel esta Setada";
}else{
	echo "a variavel não esta setada";

}
echo '<hr>';

var_dump(isset($teste));

echo '<hr>';

unset($teste);

echo '<hr>';

var_dump(isset($teste));

echo '<hr>';


