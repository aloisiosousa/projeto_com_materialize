<?php 

	$utf8 = header("Content-Type: text/html; charset=utf8");
	$link = new mysqli('localhost', 'root', '', 'db_cadastro_2018');
	$link->set_charset('utf8'); 

 ?>