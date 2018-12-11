<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

	<div class="row container">
		<p>&nbsp;</p>
		<div class="col s12">
			<h5 class="light">Consultas</h5><hr class="formulario">

			<table class="striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Telefone</th>
						<th>Senha</th>
					</tr>
				</thead>

				<tbody>
					
					<?php include_once 'banco_de_dados/read.php' ?>

				</tbody>
			</table>
			
		</div>

	</div>
 <?php include 'includes/footer.inc.php' ?>
