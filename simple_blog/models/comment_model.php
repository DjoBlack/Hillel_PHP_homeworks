<?php 
require_once './models/base_model.php';

class CommentModel extends BaseModel 
{
	public function getByPostID($postID) {
		$stmt = $this->conn->prepare('SELECT * FROM comments AS c
									  LEFT JOIN users AS u ON u.id = c.user_id 
									  WHERE post_id = ?
									  ORDER BY timestamp DESC
									  LIMIT 10');
		$stmt->execute([$postID]);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function create($body, $user_id, $post_id) {
		$stmt = $this->conn->prepare('INSERT INTO comments (body, user_id, post_id) VALUES (?, ?, ?)');
		$stmt->execute([$body, $user_id, $post_id]);
	}
	
}