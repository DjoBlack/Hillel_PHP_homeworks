<?php
require_once './models/base_model.php';

class PostModel extends BaseModel
{
	public function getAll() {
		$result = $this->conn->query('SELECT p.id, p.title, p.body, p.user_id, p.date, u.email, c.body, COUNT(c.id) AS count_num
							FROM posts AS p
							JOIN users AS u ON u.id = p.user_id
							LEFT JOIN comments AS c ON p.id = c.post_id
							GROUP BY p.id
							ORDER BY p.date DESC');
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function create($title, $body, $user_id) {
		$stmt = $this->conn->prepare('INSERT INTO posts (title, body, user_id) VALUES (?, ?, ?)');
		$stmt->execute([$title, $body, $user_id]);
	}

	public function getPostById($id) {
		$stmt = $this->conn->prepare('SELECT p.id, p.title, p.body, p.date, u.email, p.user_id
									  FROM posts AS p
									  JOIN users AS u ON u.id = p.user_id 
									  WHERE p.id = ?');
		$stmt->execute([$id]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function getPostsByUserId($user_id) {
		$stmt = $this->conn->prepare('SELECT p.id, p.title, p.body, p.date, p.user_id, u.email
									  FROM posts AS p
									  JOIN users AS u ON p.user_id = u.id
									  WHERE p.user_id = ? 
									  ORDER BY p.date DESC');
		$stmt->execute([$user_id]);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function deletePostById ($id) {
		$stmt = $this->conn->prepare('DELETE FROM posts WHERE id  = ?');
		$stmt->execute([$id]);
	}

}