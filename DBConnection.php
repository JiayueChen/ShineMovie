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
		$stmt = $this->getConnInstant()->prepare('SELECT * FROM comments WHERE movie_id = :id ORDER BY date DESC');
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

	public function insertComment($movie_id,$content) {
		$stmt = $this->getConnInstant()->prepare('INSERT INTO comments(movie_id,date,content) VALUES (:mid,:date,:content)');
		$result = $stmt->execute(
			array(
				':mid'=>$movie_id,
				':date'=>date('y-m-d h:i:s'),
				'content'=>$content,
			)
		);
		
		return $result;
	}

	public function search($movie_name) {
		$stmt = $this->getConnInstant()->prepare('SELECT * FROM movies WHERE name like :movie_name ORDER BY date DESC');
		$stmt->execute(
			array(':movie_name'=>'%' . $movie_name. '%')
		);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function addScoreByMovieId($movie_id, $score) {
		$stmt = $this->getConnInstant()->prepare('INSERT INTO score(movie_id,score,date) VALUES (:mid,:score, :date);UPDATE movies SET total_score=total_score+:score, score_number=score_number+1 WHERE id=:mid;');
		$result = $stmt->execute(
			array(
				':mid'=>$movie_id,
				':score'=>$score,
				':date'=>date('y-m-d h:i:s'),
				
			)
		);
		
		return $result;
	}

}

// $db = new DBConnection();
// var_dump($db->addScoreByMovieId(3,5));


















?>