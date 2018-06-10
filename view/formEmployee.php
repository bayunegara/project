		<?php	$token = md5(uniqid(rand(), TRUE)); ?>
		<div class="columns" id="formEmployee">
		<div class="column is-3">
			<form id="newEmployee" method="POST" action="?action=saveEmployee" enctype="multipart/form-data">
				<input type="hidden" id="token" name="token" value="<?php echo $token; ?>" />
				<input type="hidden" id="slug" name="slug" value=""/>
				<figure class="image is-centered is-1by1">
				  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
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
			<div class="field is-horizontal">
			  <div class="field-label">
			    <label class="label">First Name</label>
			  </div>
			  <div class="field-body">
			    <div class="field">
			      <div class="control is-expanded">
			      	<input id="txtFirstName" name="txtFirstName" class="input" type="text" placeholder="First name" onkeyup="check_validasi('txtFirstName')">
			      </div>
			      <p id="helpFirstName" class="help is-danger">
		        	This field is required
		      	</p>
			    </div>
			  </div>
			</div>
			<div class="field is-horizontal">
			  <div class="field-label">
			    <label class="label">Last Name</label>
			  </div>
			  <div class="field-body">
			    <div class="field">
			      <div class="control is-expanded">
							<input id="txtLastName" name="txtLastName" class="input" type="text" placeholder="Last name" onkeyup="check_validasi('txtLastName')">
			      </div>
			      <p id="helpLastName" class="help is-danger">
		        	This field is required
		      	</p>
			    </div>
			  </div>
			</div>
			<div class="field is-horizontal">
			  <div class="field-label">
			    <label class="label">Age</label>
			  </div>
			  <div class="field-body">
			    <div class="field">
			      <div class="control">
							<input id="txtAge" name="txtAge" class="input" type="text" placeholder="Age name" onkeyup="check_validasi('txtAge')">
			      </div>
			      <p id="helpAge" class="help is-danger">
		        	This field is required
		      	</p>
			    </div>
			  </div>
			</div>
			<div class="field is-horizontal">
			  <div class="field-label">
			    <label class="label">Country</label>
			  </div>
			  <div class="field-body">
			    <div class="field is-narrow">
			      <div class="control is-expanded">
							<div class="select">
				    	<!-- ISO-3166-1: Alpha-2 Codes -->
				    	<?php 
				    		$url = 'assets/capital.json';
				    		$data = file_get_contents($url);
				    		$character = json_decode($data);
				    	?>
						    <select id="country" name="country">
						    	<?php
						    		foreach ($character as $key) {
						    			echo "<option value=".$key->code.">".$key->name."</option>";
						    		}
						    	?>
						    </select>
			      </div>
			      	<p id="helpCountry" class="help is-danger">
		        		This field is required
			      	</p>
				    </div>
				  </div>
				</div>
			</div>
			<div class="field is-horizontal">
			  <div class="field-label">
			    <!-- Left empty for spacing -->
			  </div>
			  <div class="field-body">
			    <div class="field">
			      <div class="control is-expanded">
			        <button id="btnSubmit" name="createEmployee" class="button is-primary" onclick="form_validation('create')">&nbsp&nbsp&nbsp Save &nbsp&nbsp&nbsp</button>
			      </div>
			    </div>
			  </div>
			</div>
			</form>
		</div>
	</div>
