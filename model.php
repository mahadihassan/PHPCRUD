<?php

	class Model{
		private $host = "localhost";
		private $username = "root";
		private $password = ""; 
		private $db = "oop_crud"; 
		private $con;

		public function __construct()
		{
			try {
				$this->con = new mysqli($this->host, $this->username, $this->password, $this->db);
				
			} catch (Exception $e) {
				echo "Connection Failed" . $e->getMessage();	
			}
		}

		public function insert()
		{
			if(isset($_POST['submit']))
			{
				echo "Success";
			}
		}
	}

?>