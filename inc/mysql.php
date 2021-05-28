<?php
	if (empty($env['DB_HOST'])) {
		die("<br> Databse hoste is empty");
	}

	class Database{
		private $host;
		private $user;
		private $pass;
		private $table;
		private $conn;
	
		public function __construct() {
			// include the env file pagina
			$pagePath = basename($_SERVER['REQUEST_URI'], '.php');
			if (strpos($pagePath, '?') !== false) {   
				$pagePath = substr($pagePath, 0, strpos($pagePath, "?")); 
			}
			else{
				$env = include '.env.php';
			}
			$this->host = $env['DB_HOST'];
			$this->user = $env['DB_USERNAME'];
			$this->pass = $env['DB_PASSWORD'];
			$this->table = $env['DB_TABLE'];
			$this->db_connect();
		}
	
		private function db_connect(){
			$this->conn = @mysqli_connect($this->host,$this->user,$this->pass, $this->table);
            if(!$this->conn)
            {
                die("could not connect to the database");
            }
		}
		
		public function checkUsersAllowance($user_id, $name, $email){
			
			$user_id = htmlspecialchars($user_id);
			$name = htmlspecialchars($name);
			$email = htmlspecialchars($email);

			// this gets all the users and returns them
			if ($stmt = $this->conn->prepare("SELECT `user_id`, `email`, `name`, `auth` FROM `users` WHERE `user_id` = ? AND `name` = ? AND `email` = ?")) {
				$stmt->bind_param("sss", $user_id, $name, $email);
				$stmt->execute();
				$result = $stmt->get_result();
				$stmt->free_result();
				$stmt->close();
				return $result;
			}
			else{ 
				return mysqli_error($this->conn);
			}
		}

		public function getTheUserPasswordForLogin($email){

			$email = htmlspecialchars($email);

			if ($stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?")) {
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$result = $stmt->get_result();
				$stmt->free_result();
				$stmt->close();
				return $result;
			}
			return NULL;
		}
	}
?>