<?php 

class DBConnection {
	protected $connection;

	public function getConnInstant() {
		if (!isset($this->connnection)) {
			$this->connection = new PDO('mysql:host=localhost;dbname=Movie;charset=utf8mb4','root','root');
		}
		return $this->connection;
	}

	public function getAllMovies() {
		$stmt = $this->getConnInstant()->query('SELECT * from movies ORDER BY date DESC');
		$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $movies;
	}

	public function getAllCategories() {
		$stmt = $this->getConnInstant()->query('SELECT * from categories');
		$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $categories;
	}

	public function getMovieById($id) {
		$stmt = $this->getConnInstant()->prepare('SELECT * FROM movies WHERE id = :id');
		$stmt->execute(
			array(':id'=>$id)
		);
		$result = $stmt->fetch();
		return $result;
	}

	public function getCommentById($id) {
		$stmt = $this->getConnInstant()->prepare('SELECT * FROM comments WHERE movie_id = :id');
		$stmt->execute(
			array(':id'=>$id)
		);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getMovieByCategoryId($cid) {
		$stmt = $this->getConnInstant()->prepare('SELECT * FROM movies WHERE genre like :cid ORDER BY date DESC');
		$stmt->execute(
			array(':cid'=>'%' .',' . $cid. ',' . '%')
		);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

}

// $db = new DBConnection();
// var_dump($db->getMovieByCategoryId(12));


















?>