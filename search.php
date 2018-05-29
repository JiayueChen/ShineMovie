<?php 

class search {
	private $connection;
	private $twig;

	public function __construct($db, $twig) {
		$this->connection = $db;
		$this->twig = $twig;
	}


	public function getMethod() {
		$movie_name = $_POST['search_name'];
		$movies = $this->connection->search($movie_name);
		$categories = $this->connection->getAllCategories();


		try {
			echo $this->twig->render(
				'search.html.twig',
				array(
					'movies'=>$movies,
					'categories'=>$categories,
				
					

				)
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

?>