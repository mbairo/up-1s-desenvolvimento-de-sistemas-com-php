<?php include_once'lock.php'; 
include_once '../database/trilha.dao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Projeto Final - Área Restrita</title>
</head>
<body class = "container-fluid">

	<h1>Área Restrita - Trilhas</h1>

	<p>
		<a href="logout.php" class="btn btn-secondary btn-sm">Sair da trilha</a>
	</p>


	<?php 

	if (isset($_GET['msg']))
	{
		include_once '../useful.php';
		echo validar_msg($_GET['msg']);
	}

	?>
	


	<h3>Cadastrar nova Trilha</h3>


	<div class="col-3">
		<form action="cadastrar.php" method="post">
			
			<p>
				<label class="form-label">Nome</label><br>
				<input type="text" name="nome" required class="form-control">
			</p>

			<p>
				<label class="form-label">País</label><br>
				<input type="text" name="pais" required class="form-control">
			</p>

			<p>
				<label class="form-label">Nível de Dificuldade</label><br>
				<input type="text" name="nivel_dificuldade" required class="form-control">
			</p>

			<p>
				<button type="submit" name="cadastrar" class="btn btn-outline-success">Cadastrar</button>
			</p>
		</form>
	</div>

	<h2>Trilhas cadastradas:</h2>

	<?php 
	echo exibir_trilhas();

	?>


</body>
</html>