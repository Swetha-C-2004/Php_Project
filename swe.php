<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
        $website = $_POST['website'];
        $message = $_POST['message'];
		
		// include database connection file
		include_once("confic.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO student(name,email,mobile,website,message) VALUES('$name','$email','$mobile','$website','$message')");
		
		// Show message when user added
		echo "User added successfully. <a href='./form.html'>View Users</a>";
 	}
	?>



     