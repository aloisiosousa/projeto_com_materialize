<?php 

	session_start();
 ?>


<?php include 'includes/header.inc.php' ?>

<nav class="blue-grey">

	<div class="brand-logo light center">System Tecnology - 2018</div>	
	<ul class="right">

		<?php 

			$menu = ["Cadastrar", "Consultar", "Sair"];
			$links = ["cadastrar.php", "consultas.php", "index.php"];

			for($i = 0; $i <= 2; $i++){

				echo "<li><a href='$links[$i]'>$menu[$i]</a></li>";

			}

		?>

	</ul>
</nav>

<section>

	<div class="conteudo container">
	
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	</div>

</section>



<?php include 'includes/footer.inc.php' ?>