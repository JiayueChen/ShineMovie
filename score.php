<?php 

class score {
	private $connection;
	private $twig;

	public function __construct($db, $twig) {
		$this->connection = $db;
		$this->twig = $twig;
	}


	public function submitMethod() {
		$movie_id = $_POST['movie_id'];
		$score = $_POST['score'];

		$result = $this->connection->addScoreByMovieId($movie_id, $score);

		header("Access-Control-Allow-Origin:*");
		header("Content-Type:application/json;charset=UTF-8");
		if ($result) {
			$message = array(
				'code'=>200,
				'message'=>'Add score successfully.',
			);
			echo json_encode($message);
		} else {
			$message = array(
				'code'=>400,
				'message'=>'Add score failed. Please try again.',
			);
			echo json_encode($message);
		}

	}
}

?>