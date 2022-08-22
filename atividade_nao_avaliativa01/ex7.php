<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 07 - Marcos Bairo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once 'menu.php'; ?>
	<h4>
Um  funcionário  de  uma  empresa  recebe  aumento  salarial  anualmente:  <br>
Sabe-se que: <br> 
a. Esse funcionário foi contratado em 2015, com salário inicial de R$ 1.000,00; <br>
b. Em 2016 recebeu aumento de 1,5% sobre seu salário inicial; <br>
c. A partir de 2017 (inclusive), os aumentos salariais sempre correspondem ao 
dobro do percentual do ano anterior.  <br>
Faça um programa que determine o salário atual desse funcionário
	</h4>

	<h3>
		
    
		<?php
		// código do professor... o meu não deu muito certo... em análise
		<h3>
		Um funcionário de uma empresa recebe aumento salarial anualmente: Sabe-se que:
		<ul>
			<li>Esse funcionário foi contratado em 2015, com salário inicial de R$ 1.000,00;</li>
			<li>Em 2016 recebeu aumento de 1,5% sobre seu salário inicial;</li>
			<li>A partir de 2017 (inclusive), os aumentos salariais sempre correspondem ao dobro do percentual do ano anterior.</li>
		</ul>
		Faça um programa que determine o salário atual desse funcionário.
	</h3>

	<h3>Resultado:</h3>

	<?php  

	$salario = 1000; // salario inicial
	$ano = 2015; // ano da contratação

	// 2016
	$percentual = 0.015; // 1.5% de aumento
	$aumento = $salario * $percentual;
	$salario += $aumento;

	$ano_final = date('Y'); // retorna o ano com 4 digitos, ex: 2021

	do { // a partir de 2017

		$percentual *= 2; // dobramos o percentual de aumento
		$aumento = $salario * $percentual; // calculamos o aumento
		$salario += $aumento; // efetuamos o aumento
		$ano++; // passou +1 ano

	} while ($ano < $ano_final);

	// formatar salário no padrão monetário
	$salario = number_format($salario, '2', ',', '.');

	echo "O salário do funcionário em $ano_final = R$ $salario";

		/* Código não está funcionando... 
		$salario = 1000;
		$percent = 0.015;
		$ano_final = date('Y');
		for ($ano=2016; $ano <=$ano_final; $ano++) { 
			
			if ($ano<=2016) {
				$salario = $salario * $percent;
			} else {
				$percent *= 2; 
				$salario = $salario * $percent;
			}			 
		}
		$salario = number_format($salario, '2',',','.');
		$ano_final = date('Y');
		echo"O salário do funcionário em $ano_final é: R$ $salario";
		*/
		 ?>
	</h3>
</body>
</html>