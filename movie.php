<?php 
class movie {
	private $connection;
	private $twig;

	public function __construct($db, $twig) {
		$this->connection = $db;
		$this->twig = $twig;
	}

	public function indexMethod() {
		echo "this is movie index";
	}

	public function getMethod($id) {
		$movie = $this->connection->getMovieById($id);
		$categories = $this->connection->getAllCategories();
		$comments = $this->connection->getCommentById($id);
		try {
			echo $this->twig->render(
				'movie.html.twig',
				array(
					'movie'=>$movie,
					'categories'=>$categories,
					'comments'=>$comments,

				)
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

?>