<?php 

include_once 'conexao.php';

	$querySelect = $link->query(select nome, telefone from tb_clientes);

	while($registros = $querySelect->fetch_assoc()){

		$id = $registros['id'];
		$nome = $regitros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];
		$senha	  = $registros['senha'];

		header(Location:../cadastrar.php);


	}

?>

