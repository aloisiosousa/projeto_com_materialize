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
	<form  action="home.php" class="col s12">
		<fieldset class="formulario"  style="padding: 15px">
			<legend><img src="imagens/avatar2.png" width="100px"></legend>

			<div class="input-field col s12 ">
				<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome"  id="nome" required autofocus class="validate">
				<label for="login">LOGIN</label>
			</div>

			<div class="input-field col s10">
				<i class="material-icons prefix">lock</i>
				<input type="password" name="senha"  id="senha" maxlength="10" required class="validate">
				<label for="senha">SENHA</label>
			</div>

			<div class="input-field col s2">
				<input type="button" onclick="mostrarSenha();" class="btn" value="ver">

			</div>

			<div class="input-field col s12">
				 <label for="salvar">
      				  <input type="checkbox" id="salvar" id="salvar" class="filled-in" class="validate"/>
       				 <span><em>Lembrar os dados.</em></span>	
      			</label>
      			<div class="col s3 right">
	      			<label for="novo">
					 	<a href="criar_login.php" class="light">Cadastrar Login</a>
	      			</label>
       			</div>
			</div>

			<p>&nbsp;</p>
			
			<div class="input-field col s12 center">
				<input type="submit" value="Entrar" class="btn blue">
			</div>
		</fieldset>
	</form>
	</div>
</div>

<?php include 'includes/footer.inc.php' ?>
