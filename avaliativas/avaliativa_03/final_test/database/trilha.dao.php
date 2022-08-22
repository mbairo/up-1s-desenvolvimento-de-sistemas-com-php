<?php 
include_once'conn.php';

function salvar_trilha($nome, $pais, $nivel_dificuldade)
{
	$conn = conectar();

	$sql = "INSERT INTO trilhas_tb (nome, pais, nivel_dificuldade)
	VALUES('$nome', '$pais', '$nivel_dificuldade')";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}

function buscar_trilhas()
{
	$conn = conectar();
	$sql = "SELECT * FROM trilhas_tb";
	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return $result;
	}

	return null;
}

function exibir_trilhas()
{
	$result = buscar_trilhas();

	if ($result == null)
	{
		$retorno = '<h3> Não há trilhas a serem exibidas</h3>';
	}
	else  
	{
		$retorno = '<div class="col-3">';
		$retorno .= '<table class="table table-hover">';

		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>';
		$retorno .= '<th>Nome</th>';
		$retorno .= '<th>Pais</th>';
		$retorno .= '<th>Nível de dificuldade</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';	
		$retorno .= '</tr>';

		while ($trilha = mysqli_fetch_assoc($result))
		{
			$retorno .= '<tr>';

			$retorno .= "<td>" . $trilha['id_trilha']		  . "</td>";
			$retorno .= "<td>" . $trilha['nome']     		  . "</td>";
			$retorno .= "<td>" . $trilha['pais']     		  . "</td>";
			$retorno .= "<td>" . $trilha['nivel_dificuldade'] . "</td>";
			$retorno .= "<td>" . link_deletar($trilha['id_trilha']) . "</td>";
			$retorno .= "<td>" . link_editar($trilha['id_trilha']) . "</td>";
			$retorno .= '</tr>';

		}

		$retorno .= '</table>';
		$retorno .= '</div';
	}
	
	return $retorno;
}

function link_deletar($id_trilha)
{
	$link = '<a href="deletar.php?id_trilha=' .$id_trilha.'"
	onclick="return confirm(\'Tem certeza que deseja excluir esta trilha?\')" class="btn btn-danger" >Deletar</a>';

	return $link;
}

function link_editar ($id_trilha)
{
	$link = '<a href="editar.php?id_trilha='.$id_trilha.'" class="btn btn-warning">Editar</a>';
	return $link;
}


function deletar_trilha($id_trilha)
{
	$conn = conectar();
	$sql = "DELETE FROM trilhas_tb WHERE id_trilha = $id_trilha";
	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) 
	{
		return true;
	}
	return false;
}

function buscar_trilha($id_trilha)
{
	$conn = conectar();
	$sql = "SELECT * FROM trilhas_tb WHERE id_trilha = $id_trilha";
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}
	return null;
}
function editar_trilha($id_trilha, $nome, $pais, $nivel_dificuldade)
{
	$conn = conectar();
	$sql = "UPDATE trilhas_tb SET nome = '$nome', pais = '$pais', nivel_dificuldade = '$nivel_dificuldade'
	WHERE id_trilha = $id_trilha";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0 ) 
	{
		return true;
	}
	return false;
}


?>