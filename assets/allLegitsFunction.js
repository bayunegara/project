// all function
// by bayu negara
// 2018

function hide_helper(){
	document.getElementById('helpFoto').style.visibility = "hidden";
	document.getElementById('helpFirstName').style.visibility = "hidden";
	document.getElementById('helpLastName').style.visibility = "hidden";
	document.getElementById('helpAge').style.visibility = "hidden";
	document.getElementById('helpCountry').style.visibility = "hidden";
}

function check_validasi(properties){
	var value = document.getElementById(properties).value;
	var letter = /^[a-zA-Z]+$/;
	var number = /^[0-9]+$/;
	switch(properties) {
	    case "txtFirstName":
	    		document.getElementById('helpFirstName').style.visibility = "visible";
	    		if (letter.test(value)) {
	    			document.getElementById('helpFirstName').setAttribute("class", "help is-success");
	        	document.getElementById('helpFirstName').innerHTML = "valid input";
	        	return true;
	        } else {
	        	document.getElementById('helpFirstName').setAttribute("class", "help is-danger");
	        	document.getElementById('helpFirstName').innerHTML = "invalid input";
	        	return false;
	        }
	        break;
	    case "txtLastName":
	        document.getElementById('helpLastName').style.visibility = "visible";
	    		if (letter.test(value)) {
	    			document.getElementById('helpLastName').setAttribute("class", "help is-success");
	        	document.getElementById('helpLastName').innerHTML = "valid input";
	        	return true;
	        } else {
	        	document.getElementById('helpLastName').setAttribute("class", "help is-danger");
	        	document.getElementById('helpLastName').innerHTML = "invalid input";
	        	return false;
	        }
	        break;
	    case "txtAge":
	        document.getElementById('helpAge').style.visibility = "visible";
	    		if (number.test(value)) {
	    			document.getElementById('helpAge').setAttribute("class", "help is-success");
	        	document.getElementById('helpAge').innerHTML = "valid input";
	        	return true;
	        } else {
	        	document.getElementById('helpAge').setAttribute("class", "help is-danger");
	        	document.getElementById('helpAge').innerHTML = "invalid input";
	        	return false;
	        }
	        break;
	    case "foto":
	        document.getElementById('helpFoto').style.visibility = "visible";
	    		if (value != '') {
	    			document.getElementById('helpFoto').setAttribute("class", "help is-success");
	        	document.getElementById('helpFoto').innerHTML = "Valid photo";
	        	return true;
	        } else {
	        	return false;
	        }
	        break;
	    default:
		}
}

function table_sorting(){
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("tableDataEmployee");
  switching = true;
  dir = document.getElementById("sortingData").value; 
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++;      
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}