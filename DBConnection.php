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
}

// $db = new DBConnection();
// var_dump($db->getAllMovies());


















?>