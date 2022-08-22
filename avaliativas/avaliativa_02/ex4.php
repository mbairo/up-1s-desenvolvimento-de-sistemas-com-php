<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicío 04</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include_once'menu.php';?>
	<h1>Exercicío 04</h1>
	<h4>Elabore um programa que calcule o que deve ser pago por um produto, considerando o valor 
inicial da compra e a escolha da condição de pagamento. Utilize os códigos da tabela a seguir 
para ler qual a condição de pagamento escolhida e efetuar o cálculo adequado. </h4> 
	<br><br>

	<form action="ex4.php" method="post">
		<p>
		<label>Informe o valor do produto:</label><br>
		<input type="number" name="v_produto" min="0.01" step="0.01" required>
		</p>

		<p>
		<label>Informe a forma de pagamento: </label><br>
		<select name="cod">
			<option value="1">À vista em dinheiro ou cheque, recebe 10% de descont</option>
			<option value="2">À vista no cartão de crédito, recebe 5% de desconto</option>
			<option value="3">Em 2 vezes, preço da etiqueta sem juros</option>
			<option value="4">Em 3 vezes, preço da etiqueta mais juros de 10%</option>
		</select>
		</p>

		<br><br>
		<button type="submit" name="calcular">Calcular</button>
		<br><br>


		<?php if (isset($_POST['calcular'])) 
		{
			$v_produto = $_POST['v_produto'];
			$cod = $_POST['cod'];

			/*
			>>>>> Poderia ter sido utilizado o switch case com intervalos <<<<
	
			switch ($cod)
			{
				case 1:
					$v_final = $v_produto * 0.9;
					break;
				
				case 2:
					$v_final = ...
					...	 

				default:
					$v_final = $v_produto *1.1;
					break;
			}
			*/


			if ($cod == 1) 
			{
				$v_final = $v_produto * 0.9;
				echo"À vista em dinheiro ou cheque, com <b>10% de desconto</b> <br/>";
			}
			elseif ($cod == 2) 
			{
				$v_final = $v_produto * 0.95;
				echo "À vista no cartão de crédito, com <b>5% de desconto</b> <br/>";
			}
			elseif ($cod == 3) 
			{    
				$v_final = $v_produto ;
				$v_em_2x = $v_produto / 2;
				$v_em_2x = number_format($v_em_2x, "2", ",", ".");
				echo "Sem juros em 2 vezes de <b> R\$ $v_em_2x </b><br /> ";
			}
			else
			{
				$v_final = $v_produto * 1.1;
				$v_em_3x = $v_final / 3;
				$v_em_3x = number_format($v_em_3x, "2", ",", ".");
				echo "10% de juros em 3 vezes de <b> R\$ $v_em_3x </b><br />";
			}

			$v_final = number_format($v_final, "2", ",", ".");
			echo "Valor total da compra: <u> R\$ $v_final </u>";
		}  
		?>
	</form>
</body>
</html>