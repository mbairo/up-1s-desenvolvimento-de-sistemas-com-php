<?php 
include_once 'lock.php';

if (!isset($_GET['id_trilha']))
{
	header('location:index.php?msg=id_invalido');
}
else
{
	$id_trilha = $_GET['id_trilha'];

	include_once '../database/trilha.dao.php';
	$result = deletar_trilha($id_trilha);

	if($result)
	{
		header('location:index.php?msg=trilha_deletada');
	}
	else
	{
		header('location:index.php?msg=erro_deletar');
	}
}
?>