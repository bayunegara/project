<?php 
	if(isset($_POST['token'])) {
		$photo = $_FILES['foto']['name'];
		$file_tmp = $_FILES['foto']['tmp_name'];
		$slug = $_POST['slug'];
		$result = $process->getDataEmployee($slug);
		if($process->updatePhotoEmployee($slug, $photo, $file_tmp)) {
			echo '
						<div class="columns">
							<div class="column is-12">
		        		<div class="notification is-primary">
								  <strong>Update data employee "'.$result['first_name'].' '.$result['last_name'].'" success</strong>
								</div>
							</div>
						</div>
	            ';
	        } else {
	          echo '               
		        	<div class="columns">
								<div class="column is-12">
			        		<div class="notification is-warning">
									  <strong>Update data employee "'.$result['first_name'].' '.$result['last_name'].'" failed</strong>
									</div>
								</div>
							</div>
	            ';
	        }
	}
?>