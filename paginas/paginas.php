<?php
	$pagina = $_GET['pagina'];
	
	switch($pagina)
	{
		case 'inicio':
			include 'inicio.php';
			break;
		case 'aulas':
			include 'aulas.php';
			break;
		case 'matematica-zero':
			include 'aulas-matematica-zero.php';
			break;
		case 'matematica':
			include 'aulas-matematica.php';
			break;
		case 'fisica':
			include 'aulas-fisica.php';
			break;
		case 'quimica':
			include 'aulas-qumica.php';
			break;
		case 'artigos':
			include 'artigos.php';
			break;
		case 'contato':
			include 'contato.php';
			break;
		default:
			include 'contato.php';
			break;
	}
?>