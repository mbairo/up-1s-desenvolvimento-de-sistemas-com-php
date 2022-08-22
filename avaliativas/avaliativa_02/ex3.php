<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicío 03</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php';?>
	<a href="menu.php"></a>
	<h1>Exercicío 03</h1>
	<h4>Elabore um programa que, dada a idade de um nadador, classifique-o em uma das seguintes categorias:</h4> 
	<br><br>

	<form action="ex3.php" method="post">
		<p>
		<label> Informe sua idade:</label>
		<input type="number" name="idade" min="1" required placeholder="Ex: 16">
		</p>

		<button type="submit" name="verificar">Verificar</button>
		<br><br>

		<?php if (isset($_POST['verificar'])) 
		{
			$idade = $_POST['idade'];	
			
			/*
			>>>>> Poderia ter sido utilizado o switch case com intervalos <<<<
			switch (true){

				case $idade <=4:
					 $categoria = "Sem categoria";
					 break;

				case $idade <= 7:
					 	code...
					 	break;	

					...
				default: // equivalente ao else
					$categoria = "Adulto";
					break // não se faz necessário utilizar o último break						
			*/ 

			if ($idade <=4) 
			{
				$categoria = "Sem categoria";
			}
			elseif ($idade <=7) 
			{
				$categoria = "Infantil A";
			}
			elseif ($idade <=10) 
			{
				$categoria = "Infantil B";
			}
			elseif ($idade <=13) 
			{
				$categoria = "Juvenil A";
			}
			elseif ($idade <=17) 
			{
				$categoria = "Juvenil B";
			}
			else
			{
				$categoria = "Adulto";
			}
			echo "Sua categoria é: <b> $categoria </b>" ; 
		}
		 ?>
	</form>
</body>
</html>