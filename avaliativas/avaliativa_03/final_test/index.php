<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Projeto Final - Home - Marcos Bairo -</title>
</head>
<body class = "container-fluid">

	<h1> Projeto Final - Trilhas - </h1>


	<?php 

	if (isset($_GET['msg']))
	{
		include_once'useful.php';
		echo validar_msg($_GET['msg']);
	}

	?>

	<h2>Informe as credenciais para ter acesso ao sistema</h2>

	<div class="col-3">
		<form action="validar.php" method="post">
			
			<p>
				<label>Usuário: </label><br>
				<input type="text" name="usuario" required>
			</p>

			<p>
				<label>Senha: </label><br>
				<input type="password" name="senha" required>
			</p>

			<p>
				<button type="submit" name="entrar" class="btn btn-outline-success"> Entrar</button>
			</p>
		</form>
	</div>

</body>
</html>
