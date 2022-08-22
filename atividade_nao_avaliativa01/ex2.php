<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Exercício 02 - Marcos Bairo</title>
</head>
<body>
	<?php include_once 'menu.php'; ?>

	<h1>Exercício 02</h1>	
	<h4>
		Crie  um  algoritmo  que  mostre  a  tabuada  de  um  valor  qualquer  (a  sua  escolha), 
mostrando os resultados da multiplicação deste valor de 1 até 10.  <br>
	</h4>

<h3>
	<?php 
		$num = rand(1, 100);

		echo "Tabuada do $num <br> <br>";
		for ($cont=1; $cont<=10 ; $cont++) {
			$resultado = $num * $cont;
			echo "$num x $cont = $resultado <br>";
		}
	 ?>
</h3>
</body>
</html>