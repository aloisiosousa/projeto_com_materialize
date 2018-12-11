

<?php
	session_start();
	include_once 'includes/header.inc.php';
	include_once 'includes/menu.inc.php'; 
?>

	<div class="row container">
		<p>&nbsp;</p>
		<div class="col s12">
			<h5 class="light">Edição de registros</h5><hr class="formulario">
		</div>
	</div>

	<?php 

		include_once 'banco_de_dados/conexao.php';

		$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

		$_SESSION['id'] = $id;

		$querySelect = $link->query("select * from tb_clientes where id='$id'");

		while($registros = $querySelect->fetch_assoc()):
			$nome     = $registros['nome'];
			$email	  = $registros['email'];
			$telefone = $registros['telefone'];
			$senha    = $registros['senha'];

		endwhile;
	?>

	<!-- formulário de Cadastro -->

	<div class="row container">
		<form action="banco_de_dados/update.php" method="post" class="col s12">
			
			<fieldset class="formulario" style="padding: 15px">
				<legend><img src="imagens/avatar3.png" alt="[imagem]"  width="100"></legend>
				<h5 class="light center">Alteração de Registros</h5>

				<!-- Campo Nome -->
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
					<label for="nome">Nome do Cliente</label>
					
				</div>

				<!-- CAMPO DO EMAIL -->
				<div class="input-field col s12">
					<i class="material-icons prefix">email</i>
					<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
					<label for="email">Email do Cliente</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">phone</i>
					<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
					<label for="telefone">Telefone do Cliente</label>
				</div>

				<div class="input-field col s12">
					<i class="material-icons prefix">lock</i>
					<input type="text" name="senha" id="senha" value="<?php echo $senha ?>" maxlength="10" required>
					<label for="senha">Senha do Cliente</label>
				</div>

				<div class="input-field col s12 center">
					<input type="submit" value="alterar" class="btn blue">
					<a href="consultas.php" class="btn red">Cancelar</a>
				</div>
			</fieldset>
		</form>
	</div>
 
 <?php include 'includes/footer.inc.php' ?>
