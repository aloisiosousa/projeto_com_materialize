<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from tb_cadastrado");

	while ($dados = $consultar->fect_assoc()) {

		$id 	= $dados['id'];
		$nome 	= $dados['nome'];
		$num	= $dados['num'];
		$cargo	= $dados['cargo'];


		echo "<tr>";

		echo "<td>id<td>nome<td>num<td>cargo";

		echo "<td><a href='#'>Editar</a>";
		echo "<td><a href='#'>Excluir</a>";
		
	}

?>