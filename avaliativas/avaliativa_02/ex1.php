<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicío 01</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once 'menu.php';?>

	<h1>Exercicío 01</h1>
	<h4>Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um programa que 
calcule o seu peso ideal, de acordo com as seguintes fórmulas:</h4> <br><br>

	<form action="ex1.php" method="post">
		<p>
		<label>Informe sua altura em metros: </label><br>
		<input type="number" name="altura" min="0.01" step="0.01"  required placeholder="Ex: 1,81">
		</p>

		<p>
		<label>Informe seu sexo: </label><br>
		<input type="radio" name="sexo" value="1" checked> Masculino
		<input type="radio" name="sexo" value="0"> Feminino
		</p> <br>
		<button type="submit" name="calcular">CALCULAR</button><br><br>


		<?php if (isset($_POST['calcular'])) 
		{
			$altura = $_POST['altura'];
			$sexo = $_POST['sexo'];
			

			/* Pode ser feito dessa maneira também -- Ternário
			$p_ideal = $sexo == 1 ? (72.7 * $altura) - 58 : (62.1 * $altura) - 44.7; 
			*/

			if ($sexo == "1") 
			{
				$p_ideal = 72.7 * $altura-58;
			}
			else
			{
				$p_ideal = 62.1 * $altura-44.7;
			}


			$p_ideal = number_format($p_ideal,"2", ",", ".");

			echo "Peso ideal:<b> $p_ideal kg</b>";
		} 
		?>
	</form>
</body>
</html>