<?php

	require_once './models/base_model.php';
	
	class UserModel extends BaseModel {


		const CHARS = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

		public function create($mail, $pass)
		{
			$salt = self::generateSalt();
			$preparePassword = self::preparePassword($pass, $salt);
			$create = $this->conn->prepare('INSERT INTO users (email, password, salt) VALUES (?, ?, ?)');
			$create->execute([$mail, $preparePassword, $salt]);
		}

		public function getUser($mail, $pass) 
		{
			$user = $this->getUserByEmail($mail);

			if ($user && self::preparePassword($pass, $user['salt']) == $user['password']) {
				// $getUser = $this->conn->prepare('SELECT * FROM users WHERE (email =  ? AND password = ?)');
				// $getUser->execute([$mail, $this->preparePassword($pass, $user['salt'])]);

				return $user;
			}
			

			return false;
		}

		private static function generateSalt() 
		{
			$randString = '';

			for ($i = 0; $i < rand(15, 65); $i++) 
			{
				$randString .= self::CHARS[rand(0, strlen(self::CHARS) - 1)];
			}

		return $randString;
			
		}

		private static function preparePassword($pass, $salt)
		{
			return hash('sha256', $pass . $salt);
		}

		public function getUserByEmail($mail)
		{
			$getUserByEmail = $this->conn->prepare('SELECT * FROM users WHERE email = ?');
			$getUserByEmail->execute([$mail]);

			return $getUserByEmail->fetch(PDO::FETCH_ASSOC);
		}

		public function getMailById($id) {
		$stmt = $this->conn->prepare('SELECT email FROM users WHERE id = ?');
		$stmt->execute([$id]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	}
?>