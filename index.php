<?php 

require_once('./vendor/autoload.php');
require_once('./DBConnection.php');

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader/*, array('cache'=>'.compilation_cache',)*/);

$db = new DBConnection();


/* 
 * Route from here
 */
if (array_key_exists('url', $_GET) && ($_GET['url'] != 'genre/get/-1')) {

	$url = $_GET['url'];
	$param_array = explode('/', $url);

	if (!file_exists($param_array[0] . '.php')) {
		echo "Sorry, wrong route";
		exit;
	}
	require_once($param_array[0] . '.php');
	$handle_obj = new $param_array[0]($db, $twig);
	if (array_key_exists(1, $param_array)) {
		$method = $param_array[1] . 'Method';
	} else {
		$method = 'indexMethod';
	}
	if (array_key_exists(2, $param_array)) {
		$handle_obj->$method($param_array[2]);

	} else {
		$handle_obj->$method();
	}
	exit();
}


?>


<?php

/* 
 * Main page generation
 */
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