<?php

	class User
	{
		const userFilePath = './models/user.txt';

		const salt = 'paamayimNekudotayim';

		public function login($login, $password)
		{
			$users = $this->getUsers();

			foreach ($users as $user) {
				if ($user['login'] == $login && $user['password'] == hash('sha256', $password.salt))
				{
					return true;
				}
			}

			return false;
		}

		public function save($login, $password)
		{

			$user = [
				'login' => $login,
				'password' => hash('sha256', $password.salt)
			];

			$this->saveUser($user);
		}

		public function validation($login){
			$users = $this->getUsers();

			foreach ($users as $user) {
				if ($user['login'] == $login)
				{
					return false;
				}
			}
			return true;
		}

		private function saveUser($user)
		{
			$users = $this->getUsers();
			$users[] = $user;

			$this -> writeUsers($users);
		}

		private function getUsers()
		{
			$usersString = file_get_contents(self::userFilePath);
			return unserialize($usersString);
		}

		private function writeUsers($users)
		{
			$usersString = serialize($users);
			file_put_contents(self::userFilePath, $usersString);
		}
	}
