<?php 

require_once('./vendor/autoload.php');
require_once('./DBConnection.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array('cache'=>'.compilation_cache',));

$db = new DBConnection();
$movies = $db->getAllMovies();

try {
	echo $twig->render(
		'index.html.twig',
		array(
			'name'=>'Shine',
			
		)
	);
} catch (Exception $e) {
	echo $e->getMessage();
}

?>