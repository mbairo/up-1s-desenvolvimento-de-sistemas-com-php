<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 06 - Marcos Bairo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php';?>

	<h4>Crie um programa que gere um número aleatório entre -10 e 10 até que encontre 
um número igual a zero. <br> 
No final, mostre a soma dos números gerados
</h4>

<h3>
	<?php 
	$soma=0;
	do {
	 	
	 	$num = rand(-10, 10);
	 	$soma+= $num;

	 } while ($num != 0); 
	echo "Soma dos números encontrados: $soma";
	 ?>
</h3>
</body>
</html>