<?php

$nome = 'aline de oliveira silva';

echo '<br>';
echo strtoupper($nome);
echo '<br>';
echo strtolower($nome);
echo '<br>';
echo ucfirst($nome);
echo '<br>';
echo ucwords($nome);
echo '<br>';
echo strlen($nome);
echo '<br>';
echo '<hr>';
$nome = str_pad($nome, 50, '*', STR_PAD_BOTH);
	echo $nome;
	echo '<hr>';
$string = str_repeat(' PHP ', 5);
	

$string = 'A linguagem JAVA é a melhor solução para o desenvolvimento WEB';
	echo "<h1> $string </h1>";
	echo '<br>';
$string = str_replace('JAVA', "PHP", $string);
	echo "<h1> $string </h1>";


$acao  = 'getNome()';
$acao2 = 'setNome()';

$acao1 = substr($acao, 0, 3);
$tipo1 = substr($acao, 3);
$tipo2 = substr($acao2, 3);
$acao2 = substr($acao2, 0, 3);
	echo '<hr>';
	echo "$acao1 <br> $acao2";
	echo '<br>';
	echo "$tipo1 <br> $tipo2";

	echo '<hr>';
$email = 'brunosilvacdc@gmail.com';

	echo strpos($email, '@');
	echo '<hr>';
$acao  = 'setEmail()';
$fim = strpos($acao, '(');
$acao1 = substr($acao,0 ,3);
$tipo = substr($acao, 3, ($fim - 3));
	echo $acao1;
	echo '<hr>';
	echo $tipo;
	echo '<hr>';

	$espaco = '                 asdasd                  ';
	var_dump($espaco);
	echo '<br>';
	var_dump(trim($espaco));

