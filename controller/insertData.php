<?php 
	if(isset($_POST['token'])) {
		$photo = $_FILES['foto']['name'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		$firstName = $_POST['txtFirstName'];
		$lastName = $_POST['txtLastName'];
		$age = $_POST['txtAge'];
		$country = $_POST['country'];
		if($process->createEmployee($firstName, $lastName, $age, $country, $photo, $file_tmp)) {
			echo '
						<div class="columns">
							<div class="column is-12">
		        		<div class="notification is-primary">
								  <strong>Save new employee "'.$firstName.' '.$lastName.'" success</strong>
								</div>
							</div>
						</div>
	            ';
	        } else {
	          echo '               
		        	<div class="columns">
								<div class="column is-12">
			        		<div class="notification is-warning">
									  <strong>Save new employee "'.$firstName.' '.$lastName.'" failed</strong>
									</div>
								</div>
							</div>
	            ';
	        }
	}
?>