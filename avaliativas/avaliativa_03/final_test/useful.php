<?php 

function validar_msg($msg)
{
	
	switch($msg)
	{
		case 'hahaha_voce_nao_disse_a_palavra_magica':
		$retorno = '<h3 class="alert alert-danger"> 
		hahaha Você não disse a palavra mágica! <br> 
		hahaha Você não disse a palavra mágica! <br> 
		hahaha Você não disse a palavra mágica!</h3>'; // referência ao filme "Jurassic Park" 
		break;

		case 'campos_em_branco':
		$retorno = '<h3 class="alert alert-warning"> Informe todos os dados para efetuar o login!</h3>';
		break;

 	    case 'dados_invalidos':
		$retorno = '<h3 class="alert alert-danger"> Atenção: Usuário ou senha inválidos</h3>';
		break;

		case 'cadastro_em_branco':
		$retorno = '<h3 class="alert alert-warning"> Preencha todos os campos!</h3>';
		break;

		case 'editar_em_branco':
		$retorno = '<h3  class="alert alert-warning"> Preencha todos os campos para edição</h3>';				
		break;

		case 'cadastrado':
		$retorno = '<h3  class="alert alert-success">Trilha cadastrada com sucesso!</h3>';				
		break;		

		case 'erro_no_cadastro':
		$retorno = '<h3 class="alert alert-danger">Erro ao cadastrar trilha... Perdeu o rumo? </h3>';				
		break;			

		case 'id_invalido':
		$retorno = '<h3  class="alert alert-warning">Atenção: Não é permitido pular etapas na trilha...</h3>';		
		break;		

		case 'trilha_deletada':
		$retorno = '<h3  class="alert alert-success">Trilha apagada do mapa com sucesso! </h3>';				
		break;

		case 'erro_deletar':
		$retorno = '<h3 class="alert alert-danger">Erro ao deletar... Tente novamente </h3>';				
		break;		

		case 'editado':
		$retorno = '<h3 class="alert alert-success">Trilha editada com sucesso!</h3>';				
		break;

		case 'erro_editar':
		$retorno = '<h3 class="alert alert-danger">Ops! Erro ao editar trilha...</h3>';				
		break;		

		default:
		$retorno = '';
		break;
	}

		return $retorno;
}
?>