<?php 

	include_once 'conexao.php';

	$querySelect = $link->query("select * from tb_clientes");

	while ($registros = $querySelect->fetch_assoc()):

		$id = $registros['id'];
		$nome = $registros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];
		$senha = $registros['senha'];


		echo "<tr>";

			echo "<td>$nome<td>$email<td>$telefone<td>$senha";

			echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a>";
			echo "<td><a href='cadastrar.php?id=$id'><i class='material-icons'>person_add</i></a>";
			//echo "<td><a href='banco_de_dados/confir_del.php?id=$id'><i class='material-icons'>delete</i></a>";
			echo "<td><a href='confirmar.php?id=$id'><i class='material-icons'>delete</i></a>";


		echo "</tr>";

	endwhile;

?>