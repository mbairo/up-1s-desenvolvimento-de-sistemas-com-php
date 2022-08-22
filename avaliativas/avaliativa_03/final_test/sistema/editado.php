<?php include_once 'lock.php';

if (!isset($_POST['cadastrar']) || empty($_POST['nome']) || empty($_POST['pais']) || empty($_POST['nivel_dificuldade']))
{
	header('location:index.php?msg=editar_em_branco');
}
else
{
	$id_trilha		   = $_POST['id_trilha'];
	$nome  			   = $_POST['nome'];
	$pais 			   = $_POST['pais'];
	$nivel_dificuldade = $_POST['nivel_dificuldade'];

	include_once '../database/trilha.dao.php';

	$result = editar_trilha($id_trilha, $nome, $pais, $nivel_dificuldade);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erro_editar');
	}
}
?>
