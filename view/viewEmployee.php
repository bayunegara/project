<?php
	$slug = $_GET['get_data'];
	$result = $process->getDataEmployee($slug);
	$token = md5(uniqid(rand(), TRUE));
?>
		<div class="columns" id="formEmployee">
		<div class="column is-3">
			<form id="editEmployee" method="POST" action="?action=updateEmployee" enctype="multipart/form-data">
				<input type="hidden" id="token" name="token" value="<?php echo $token; ?>" />
				<input type="hidden" id="slug" name="slug" value="<?php echo $result['slug'] ?>"/>
				<figure class="image is-centered is-1by1">
				  <img src="assets/photo/<?php echo $result['slug'].'/'.$result['photo'] ?>" alt="Placeholder image">
				</figure>
				<div class="file is-centered">
				  <label class="file-label">
				    <input class="file-input is-fullwidth" type="file" name="foto" id="foto" onchange="check_validasi('foto')">
				    <span class="file-cta" style="width: 1000px">
				      <span class="file-label">
				        Choose a file…
				      </span>
				    </span>
				  </label>
				</div>
				<p id="helpFoto" class="help is-danger">
		        	Photo is required
		    </p>
		</div>
		<div class="column is-5">
			<table class="table is-fullwidth">
			  <tbody>
			    <tr>
			      <td><strong>First Name</strong><td>
			      <td align="letf" width="200"><?php echo $result['first_name'] ?><td>
			    </tr>
			    <tr>
			      <td><strong>Last Name</strong><td>
			      <td><?php echo $result['last_name'] ?><td>
			    </tr>
			    <tr>
			      <td><strong>Age</strong><td>
			      <td><?php echo $result['age'].'years old' ?><td>
			    </tr>
			    <tr>
			      <td><strong>Country</strong><td>
			      <td><!-- ISO-3166-1: Alpha-2 Codes -->
				    	<?php
				    	$url = 'assets/capital.json';
				    		$data = file_get_contents($url);
				    		$character = json_decode($data);
						    foreach ($character as $key) {
						    	if ($result['country'] == $key->code) {
						    		echo $key->name;
						    	}
						    }
						   ?>
						 <td>
			    </tr>
			    <tr>
			      <td colspan="2"><button id="btnSubmit" name="editEmployee" class="button is-primary" onclick="update_validation()">&nbsp&nbsp&nbsp Save Photo &nbsp&nbsp&nbsp</button><td>
			    </tr>
			  </tbody>
			</table>
			</form>
		</div>
	</div>