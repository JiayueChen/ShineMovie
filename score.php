<?php 

class genre {
	private $connection;
	private $twig;

	public function __construct($db, $twig) {
		$this->connection = $db;
		$this->twig = $twig;
	}


	public function getMethod($cid) {
		$movies = $this->connection->getMovieByCategoryId($cid);
		$categories = $this->connection->getAllCategories();

		$a = array('id'=>-1, 'name'=>'All');
		array_unshift($categories,$a);

		try {
			echo $this->twig->render(
				'index.html.twig',
				array(
					'movies'=>$movies,
					'categories'=>$categories,
					'tag_id'=> $cid ,

					

				)
			);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

 ?>