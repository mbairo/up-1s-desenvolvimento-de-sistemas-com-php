<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicío 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php';?>

	<h1>Exercicío 05</h1>
	<h4>Faça um programa que leia dois valores vindos de um formulário representando: o operador e 
o raio de uma circunferência. Caso o operador seja igual a 1, apresentar a área da 
circunferência (PI x raio²). Caso o operador seja igual a 2, apresentar o perímetro da 
circunferência (2 x PI x raio). Caso o indicador não seja nenhum destes valores, apresentar uma 
mensagem de erro. </h4> 
	<br><br>

	<form action="ex5.php" method="post">
		<p>
		<label>Informe o operador: </label>
		<input type="number" name="operador" type="number" step="0.01" required placeholder="Número 1 ou 2">
		</p>

		<p>
		<label>Informe o raio: </label>
		<input type="number" name="raio" type="number" step="0.01" min="0.01" required>		
		</p>

		<button type="submit" name="calcular">Calcular</button>
		<br><br>
	</form>

	<?php if (isset($_POST['calcular'])) 
	{
		$operador = $_POST['operador'];
		$raio = $_POST['raio'];

		if ($operador == 1) 
		{
			$area_circun = 3.14 * $raio *$raio;
			echo"Area da circunferência:<b> $area_circun </b>";
		}
		elseif ($operador == 2) 
		{
			$perimetro_circun = 2*3.14*$raio;
			echo"Perímetro da circunferência:<b> $perimetro_circun </b>";
		}
		else
		{
			echo "<b>Erro!</b> <br /> Favor informar 1 ou 2 para o campo <b>\"operador\"</b>";
		}
	}
	 ?>
</body>
</html>