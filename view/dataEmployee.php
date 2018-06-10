	<div class="columns">
		<div class="column id-12">
			<hr>
  		<div class="control">
  			<div class="select is-primary">
				  <select id="sortingData" name="sortingData" onchange="table_sorting()">
				  	<option value="all" disabled="disabled" selected>Filter employee name</option>
				    <option value="asc">A-Z</option>
				    <option value="desc">Z-A</option>
				  </select>
				</div>
				<button id="btnNewEmployee" class="button is-primary" onclick="refresh_page()">New Employee</button>
  		</div>
  	</div>
	</div>
	<div class="columns">
		<div class="column is-12">
			<table class="table is-fullwidth is-hoverable" id="tableDataEmployee">
			  <thead>
			    <tr>
			      <th>No</th>
			      <th>Full Name</th>
			      <th>Country</th>
			      <th>Age</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$no = 1;
			  		foreach ($process->selectDataEmployee() as $key => $value) {
			  	?>
				  	<tr id="sortData" onclick="retrieve_data('<?php echo $value['slug']; ?>')">
				      <td><?php echo $no; ?></td>
				      <td><?php echo $value['first_name'].' '.$value['last_name']; ?></td>
				      <td>
				      <?php 
				    		$url = 'assets/capital.json';
				    		$data = file_get_contents($url);
				    		$character = json_decode($data);
						    foreach ($character as $key) {
						    	if ($value['country'] == $key->code) {
						    		echo $key->name;
						    	}
						    }
				      ?>				      	
				      </td>
				      <td><?php echo $value['age']; ?></td>
				    </tr>
			  	<?php
			  		++$no;
			  		}
			  	?>
			  </tbody>
		</div>
  </div>