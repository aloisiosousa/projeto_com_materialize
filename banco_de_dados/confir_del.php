<!-- Usado para Teste... -->

<?php 

	include_once 'conexao.php';
		
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

	$id = $_GET['id'];

 	echo "Quer mesmo excluir esse arquivo?<br>";
 	echo "<a href='delete.php?id=$id'>Sim</a>";
 	echo "/";
 	echo "<a href='../consultas.php'>Não</a>";

?>


