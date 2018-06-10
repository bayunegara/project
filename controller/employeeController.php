<?php
	/**
	 *  employee class
	 *  bayu negara 2018
	 */
	class activity
	{
		private $database;
		
		function __construct($connection)
		{
			$this->database = $connection;
		}

		public function createEmployee($firstName, $lastName, $age, $country, $photo, $file_tmp){
			try {
				$slug = uniqid();
				$dir = 'assets/photo/'.$slug;
				mkdir($dir, 0777, true);
				move_uploaded_file($file_tmp, $dir.'/'.$photo);
				$sql = "INSERT INTO employee (slug, first_name, last_name, age, country, photo) VALUES (:slug, :first_name, :last_name, :age, :country, :photo)";
				$stmt = $this->database->prepare($sql);
				$stmt->bindParam(':slug', $slug);
				$stmt->bindParam(':first_name', $firstName);
				$stmt->bindParam(':last_name', $lastName);
				$stmt->bindParam(':age', $age);
				$stmt->bindParam(':country', $country);
				$stmt->bindParam(':photo', $photo);
				return $stmt->execute();
			} catch (PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function selectDataEmployee(){
			try {
				$sql = "SELECT * FROM employee ORDER BY id DESC";
				$stmt = $this->database->prepare($sql);
				$stmt->execute();
				return $stmt->fetchAll();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		public function getDataEmployee($slug){
			try {
				$sql = "SELECT * FROM employee WHERE slug = :slug";
				$stmt = $this->database->prepare($sql);
				$stmt->bindParam(':slug', $slug);
				$stmt->execute();
				return $stmt->fetch();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}


		public function updatePhotoEmployee($slug, $photo, $file_tmp){
			try {
				$dirPath = 'assets/photo/'.$slug;
				move_uploaded_file($file_tmp, $dirPath.'/'.$photo);
				$sql = "UPDATE employee SET photo = :photo WHERE slug = :slug";
				$stmt = $this->database->prepare($sql);
				$stmt->bindParam(':photo', $photo);
				$stmt->bindParam(':slug', $slug);
				return $stmt->execute();
			}
			catch(PDOException $e) {
				echo $e->getMessage();
				return false;
			}
		}

		

	}

?>