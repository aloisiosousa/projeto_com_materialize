<?php include_once 'includes/header.inc.php' ?>

<?php 

	include_once 'banco_de_dados/conexao.php';
		
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>


<p>&nbsp;</p>
<div class="container">
	<!-- <form action="banco_de_dados/delete.php" method="post"> -->
	<fieldset class="formulario">
	<legend><img src="imagens/avatar3.png" width=100px"></legend>
	<div class="col s5 center">
		<h3 class="header light">Tem certeza que quer excluir?</h3>
			<div class="input-field">

				<input type="submit" value="Sim" class="btn blue" onclick="location.href='banco_de_dados/delete.php?id=<?php echo $id; ?>'">
				<input type="button" value="Não" class="btn red" onclick="location.href='consultas.php'">
				
			</div>
	</div>
	</fieldset>
	<!-- </form> -->
</div>
<?php include_once 'includes/footer.inc.php' ?>