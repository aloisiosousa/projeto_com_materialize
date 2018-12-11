<?php 
	include 'includes/header.inc.php'
 ?>
<nav class="blue-grey">

	<div class="brand-logo light center">Sistema LTV - Sytem Tecnology - 2018</div>

</nav>

<div class="row container">
	<div class="col s12 m6 offset-m3">
	<p>&nbsp;</p>

	<?php 


	?>
	<form  action="index.php" class="col s12">
		<fieldset class="formulario"  style="padding: 15px">
			<legend><img src="imagens/avatar2.png" width="100px"></legend>

			<div class="input-field col s12 ">
				<i class="material-icons prefix">email</i>
				<input type="text" name="email"  id="email" required autofocus class="validate">
				<label for="login">EMAIL</label>
			</div>

			<div class="input-field col s12">
				<i class="material-icons prefix">lock</i>
				<input type="password" name="senha"  id="senha" maxlength="10" required class="validate">
				<label for="senha">SENHA</label>
			</div>

			<p>&nbsp;</p>
			
			<div class="input-field col s12 center">
				<input type="submit" value="Salvar" class="btn blue">
			</div>
		</fieldset>
	</form>
	</div>
</div>

<?php include 'includes/footer.inc.php' ?>
