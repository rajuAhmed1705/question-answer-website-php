<?php

	if(isset($_POST['submit'])){
		print '<pre>';
		print_r($_REQUEST['field_name']);
		print '</pre>';
	}


?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
			var maxField = 10; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="remove-icon.png"/></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
		});
</script>

	<title></title>
</head>
<body>
	<form action="" method="post" >
		<div class="field_wrapper">
			<div>
				<input type="text" name="field_name[]" value=""/>
				<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
			</div>
		</div>
		<input type="submit" value="SUBMIT" name="submit" />
	</form>	
</body>
</html>


