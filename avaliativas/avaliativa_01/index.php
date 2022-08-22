<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home (Avaliativa 01 - Marcos Bairo)</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
		<h1 class="color1">Cadastro de Aparelhos Eletrônicos</h1><br>
		<h3>Favor informar os dados para cadastros</h3>

		<form action="cadastro.php" method="post">
			<p>
				<label>Nome do aparelho: </label><br>
				<input type="text" name="nome" maxlength="100" required="">
			</p>
			<p>	
				<label>Consumo máximo em Watts: </label><br>  
				<input type="number" name="max_watts" min="1" required="">
			</p>
			<p>
				<label>Número de horas que o aparelho fica ligado por dia: </label><br>
				<input type="number" name="horas_dia" min="1" max="24" required="">
			</p>
			<p>
				<label>Número de dias que o aparelho ficará ligado no mês:</label><br>
				<input type="number" name="dias_ligado" min="1" max="31" required="" >
			</p>
			<p>
				<label>Valor do kilowatt-hora: </label><br>
				<input type="number" name="valor_kwh" min="0" step="0.01" required="">
			</p>

			<button type="submit" name="enviar">Enviar</button>

		</form>

</body>
</html>