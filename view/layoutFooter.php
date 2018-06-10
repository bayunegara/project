			</div>
		</div>
		<script type="text/javascript" src="assets/allLegitsFunction.js"></script>
		<script type="text/javascript">

			hide_helper();

			function	form_validation(){
				event.preventDefault();
		    if (token != "" && check_validasi('foto') && check_validasi('txtFirstName') && check_validasi('txtLastName') && check_validasi('txtAge')) {
		    		if (document.getElementById("slug").value == "") {
            	document.getElementById("newEmployee").submit();
		        }
		    } else {
		    	return false;
		    }
			}

			function update_validation(){
				event.preventDefault();
		    if (token != "" && check_validasi('foto') && (document.getElementById("slug").value != "")) {
		    	document.getElementById("editEmployee").submit();
		    } else {
		    	return false;
		    }
			}

			function refresh_page(){
				window.location.assign("?action=addEmployee");
			}

			function retrieve_data(key){
				window.location.assign("?get_data="+key);
			}
		</script>
	</body>
</html>