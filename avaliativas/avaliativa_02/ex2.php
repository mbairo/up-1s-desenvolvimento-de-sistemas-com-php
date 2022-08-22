<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicío 02</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php';?>

	<h1>Exercicío 02</h1>
	<h4>Construa um programa para calcular as raízes de uma equação do 2º grau (ax2 + bx + c):</h4> 
	<br><br>

	<form action="ex2.php" method="post">
		<p>
		<label>	Informe o valor de a:</label>
		<input type="number" name="a" step="0.01"  required>
		</p>

		<p>
		<label>	Informe o valor de b:</label>
		<input type="number" name="b" step="0.01" required>
		</p>
	
		<p>
		<label>	Informe o valor de c:</label>
		<input type="number" name="c" step="0.01" required>
		</p>
		
		<button type="submit" name="calcular">CALCULAR</button>
		<br><br>

		<?php if (isset($_POST['calcular']))
		 {

			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];

			
			 //delta = b² - 4 * a * c
			$delta = ($b * $b) -4 * ($a * $c); 

			if ($delta == 0) //Se Delta = 0, há duas raízes reais e iguais.
			{
				$x1 = ((-($b))+ sqrt($delta)) / (2*$a);

				$x1 = number_format($x1, "2" , ",", ".");  // utilizando 2 casas decimais
				
				echo "Resultado: ";
				echo "<p>X1 = $x1 </p>"; 
				echo "<p>X2 = $x1</p>";
			}
			else if ($delta >0) // Se Delta > 0, há duas raízes reais e diferentes
			{	
				$x1 = ((-($b))+ sqrt($delta)) / (2*$a);
				
				$x2 = ((-($b))- sqrt($delta)) / (2*$a);

				$x1 = number_format($x1, "2" , ",", ".");
				$x2 = number_format($x2, "2" , ",", ".");

				echo "Resultado: <br><br>";
				echo "<b>X1 = $x1 </b> <br> <br>"; 
				echo "<b>X2 = $x2</b>"; 
			}
			else
			{ 
				// Delta <0
				echo "Resultado: ";
				echo "<b>Não há raízes reais</b>";
			}			
		  }
		 ?>
 	</form>
</body>
</html>