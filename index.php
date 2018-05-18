<?php 

require_once('./vendor/autoload.php');
require_once('./DBConnection.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader/*, array('cache'=>'.compilation_cache',)*/);

$db = new DBConnection();
$movies = $db->getAllMovies();
$categories = $db->getAllCategories();

$a = array('id'=>-1, 'name'=>'All');
array_unshift($categories,$a);

try {
	echo $twig->render(
		'index.html.twig',
		array(
			'name'=>'ShineMovie',
			'movies'=> $movies,
			'categories'=>$categories,
			'tag_id'=> -1,
			
		)
	);
} catch (Exception $e) {
	echo $e->getMessage();
}

?>