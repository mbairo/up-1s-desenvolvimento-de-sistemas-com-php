<?php include_once'lock.php'; 
include_once '../database/trilha.dao.php';

if(!isset($_GET['id_trilha']))
{
	header('location:index.php?msg=id_invalido');
}
else
{
	$result = buscar_trilha($_GET['id_trilha']);

	if($result == null)
	{
		header('location:index.php?msg=id_invalido');
	}
	else
	{
		$trilha = mysqli_fetch_assoc($result);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	<title>Projeto Final - Editar Trilha</title>
</head>
<body class = "container-fluid">


	<h1>Editar Trilhas</h1>

	<p>
		<a href="index.php" class="btn btn-secondary btn-sm ">Cancelar Edição</a>
	</p>

	<h3>Editar Trilha</h3>

	<div class="col-3">
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Nome</label><br>
				<input type="text" name="nome" required value="<?= $trilha['nome']?>" class="form-control">
			</p>

			<p>
				<label class="form-label">País</label><br>
				<input type="text" name="pais" required value="<?= $trilha['pais']?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Nível de Dificuldade</label><br>
				<input type="text" name="nivel_dificuldade" required value="<?= $trilha['nivel_dificuldade']?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="cadastrar" class="btn btn-outline-success">Salvar Alterações</button>
			</p>

			<input type="hidden" name="id_trilha" value="<?= $trilha['id_trilha'] ?>">
		</form>
	</div>

</body>
</html>