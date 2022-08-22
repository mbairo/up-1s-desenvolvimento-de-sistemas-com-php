<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro (Avaliativa 01 - Marcos Bairo)</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<h1 class="color1">Consumo do Aparelho</h1>


	<?php if (isset($_POST['enviar']))
	{
		
		$max_watts = $_POST['max_watts'];
		$horas_dia = $_POST['horas_dia'];
		$dias_ligado = $_POST['dias_ligado'];
		$valor_kwh = $_POST['valor_kwh'];

		//consumo diário do aparelho
		$consumo_diario = ($max_watts/1000)*$horas_dia;

		//consumo mensal do aparelho
		$consumo_mensal = $consumo_diario * $dias_ligado;

		//consumo do aparenho em R$ por mês
		$consumo_rs = $consumo_mensal * $valor_kwh; 


		//Formatação Padrão monetário
		$valor_kwh = number_format($valor_kwh, "2", ",", ".");
		$consumo_rs = number_format($consumo_rs, "2", ",", ".");
		

		// Mostrar os dados
		//echo "<p>";
		echo "<p>Consumo diário: $consumo_diario kWh </p><br>";
		echo "Consumo mensal do aparelho: $consumo_mensal kWh <br>";
		echo "Consumo do apararelho em R\$: $consumo_rs <br>";
		
		
		if ($consumo_rs <= 5) 
		{
			$categoria = "Baixa";
		}
		else if ($consumo_rs > 10) 
		{
			$categoria = "Elevada";
		}
		else
		{
			$categoria = "Moderada";
		}

		echo "<p>Categoria de consumo mensal:  $categoria </p>";
	}

	 ?>
	 <a href="index.php" class="link1">Home</a>

</body>
</html>