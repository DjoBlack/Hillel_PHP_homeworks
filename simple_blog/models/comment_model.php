<?php 
require_once './models/base_model.php';

class CommentModel extends BaseModel 
{
	public function getByPostID($postID) {
		$stmt = $this->conn->prepare('SELECT u.id AS user_id, c.id AS comment_id, c.post_id, c.body, c.timestamp, u.email 		 FROM comments AS c
									  JOIN users AS u ON u.id = c.user_id 
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

	public function deleteCommentById ($comment_id) {
		$stmt = $this->conn->prepare('DELETE FROM comments WHERE id = ?');
		$stmt->execute([$comment_id]);
	}

	public function updateCommentById ($new_comment, $comment_id) {
		$stmt = $this->conn->prepare('UPDATE comments
									  SET body = ? 
									  WHERE id = ?');
		$stmt->execute([$new_comment, $comment_id]);
	}
	
}