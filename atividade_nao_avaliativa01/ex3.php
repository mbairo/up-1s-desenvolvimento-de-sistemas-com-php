<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercício 03 - Marcos Bairo</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once 'menu.php';?>

	<h4>
João nasceu pesando 2,5 Kg, e seu irmão gêmeo José, 2,7 Kg. Sabendo que os 
irmãos engordam, respectivamente, 215g e 210g a cada semana, daqui a quantas 
semanas ambos terão 5kg ou mais? 
	</h4>

	<h3>

		<?php

		$peso_joao = 2.5;
		$peso_jose = 2.7;
		$semanas   = 0;

		while ($peso_joao <= 5 || $peso_jose <=5) {
			$peso_joao  += 0.215;
			$peso_jose  += 0.210;
			$semanas++;
		}
		echo "Foi necessário <i>" .$semanas. " </i>semanas para que ambos tivessem 5kg ou mais <br>";
		echo "Peso do João: $peso_joao <br>";
		echo "Peso do José: $peso_jose";
		 ?>
	</h3>
</body>
</html>