<?php
	if (isset($_GET['action'])) {
		$toDo = $_GET['action'];
		switch ($toDo) {
				case 'saveEmployee':
						include 'controller/databaseController.php';
						include 'controller/insertData.php';
						include 'view/formEmployee.php';
						include 'view/dataEmployee.php';
					break;
				case 'addEmployee':
						include 'controller/databaseController.php';
						include 'view/formEmployee.php';
						include 'view/dataEmployee.php';
					break;
				case 'updateEmployee':
						include 'controller/databaseController.php';
						include 'controller/updateData.php';
						include 'view/formEmployee.php';
						include 'view/dataEmployee.php';
					break;				
				default:
					include 'controller/databaseController.php';
					include 'view/dataEmployee.php';
					break;
			}	
	} elseif (isset($_GET['get_data'])) {
		include 'controller/databaseController.php';
		include 'view/viewEmployee.php';
		include 'view/dataEmployee.php';
	}	else {
		include 'controller/databaseController.php';
		include 'view/dataEmployee.php';
	}
?>