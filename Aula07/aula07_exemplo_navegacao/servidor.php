<?php
$produtos = [
	'computadores' =>  [
		[
			'name' => 'Corei7 8GB', 
			'preco' => 'R$ 2500,00'
		],
		[
			'name' => 'Corei5 8GB', 
			'preco' => 'R$ 2100,00'
		],
		[
			'name' => 'Corei3 8GB', 
			'preco' => 'R$ 1800,00'
		]
	],

	'notebooks' => [
	[
			'name' => 'Corei7 16GB', 
			'preco' => 'R$ 3500,00' 
		],
		[
			'name' => 'Corei5 16GB', 
			'preco' => 'R$ 3100,00'
		],
		[
			'name' => 'Corei3 16GB', 
			'preco' => 'R$ 2800,00'
		]
	],

	'acessorios' => [
		[
				'name' => 'mouse', 
				'preco' => 'R$ 25,00'
			],
			[
				'name' => 'teclado', 
				'preco' => 'R$ 28,00'
			],
			[
				'name' => 'pendrive', 
				'preco' => 'R$ 35,00'
			]
		]
			
];

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'computadores';

foreach ($produtos[$categoria] as  $produto) {
	
	
	echo '<b>Produto: </b><i>' . $produto['name'] . '</i><br>';
	echo '<b> Preço: </b><i>' . $produto['preco'] . '</i><br>';
	echo '<hr>';
}