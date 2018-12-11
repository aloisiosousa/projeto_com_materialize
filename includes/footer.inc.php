<footer>
	
	<div class="light center">
		<p>System Tecnology - Aloísio Silva de Sousa - 2018</p>
	</div>

</footer>


<!-- IMPORTANDO OS ARQUIVO DO JQUERY e JAVASCRIPT -->
<script type="text/javascript" src="materialize/js/jquery-3.3.1.min.js"> </script>
<script type="text/javascript" src="materialize/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"> </script>

<!-- INICIANDO O JQUERY -->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#telefone").mask("(00) 0000-0000");//Para configurar os digitos de telefone fixo.
		  //$("#cpf").mask("000.000.000-00"); para configurar o cep.
		  //$("#dinheiro").mask("999.999.999,00",{reserse: true});
		  //$().mask();

		 });
	</script>
</body>
</html>