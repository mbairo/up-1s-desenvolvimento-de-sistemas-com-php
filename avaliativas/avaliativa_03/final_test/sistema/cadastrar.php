<?php include_once'lock.php';

if(!isset($_POST['cadastrar']) || empty($_POST['nome']) || empty($_POST['pais']) || empty($_POST['nivel_dificuldade']))
{
	header('location:index.php?msg=cadastro_em_branco');
}
else
{
	$nome  			   = $_POST['nome'];
	$pais 			   = $_POST['pais'];
	$nivel_dificuldade = $_POST['nivel_dificuldade'];

	include_once'../database/trilha.dao.php';

	$result = salvar_trilha($nome, $pais, $nivel_dificuldade);

	if($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		header('location:index.php?msg=erro_no_cadastro');
	}
}
?>
