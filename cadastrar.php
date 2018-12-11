<?php session_start() ?>

<?php include_once 'includes/header.inc.php' ?>

<!-- INCLUINDO O MENU NO ARQUICO index.php -->
<?php include_once 'includes/menu.inc.php' ?>	

	<!-- formulário de Cadastro -->

	<div class="row container">
		<form action="banco_de_dados/create.php" method="post" class="col s12">
			<p>&nbsp;</p>
			<fieldset class="formulario" style="padding: 15px">
				<legend><img src="imagens/avatar3.png" alt="[imagem]"  width="100"></legend>
				<h5 class="light center">Cadastro de Clientes</h5>

				<?php 
					if (isset($_SESSION['msg'])):
						echo $_SESSION['msg'];

						session_unset();
					endif;
				?>

				<!-- CAMPO DO NOME -->
				<div class="input-field col s12">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
					<label for="nome">Nome do Cliente</label>
				</div>
				<!-- CAMPO DO EMAIL -->
				<div class="input-field col s12">
					<i class="material-icons prefix">email</i>
					<input type="email" name="email" id="email" maxlength="50" required>
					<label for="email">Email do Cliente</label>
				</div>
				<!-- CAMPO DO TELEFONE -->
				<div class="input-field col s12">
					<i class="material-icons prefix">phone</i>
					<input type="tel" name="telefone" id="telefone" maxlength="15" required>
					<label for="telefone">Telefone do Cliente</label>
				</div>

				<!-- CAMPO DO SENHA -->
				<div class="input-field col s12">
					<i class="material-icons prefix">lock</i>
					<input type="password" name="senha" id="senha" maxlength="11" required>
					<label for="telefone">Senha do Cliente</label>
				</div>


				<div class="input-field col s12 center">
					<input type="submit" value="cadastrar" class="btn blue">
					<input type="reset" value="Limpar" class="btn red">
				</div>
			</fieldset>
		</form>
	</div>
	
 <?php include 'includes/footer.inc.php' ?>
