<?php
require 'db.php';
$sql = "INSERT INTO signup (FirstName, MiddelName, LastName, EmailID, Password, Mobile) VALUES ('$first', '$middel', '$last', '$email', '$passwd', '$mobile')";

	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	require 'Signup_detail.php';
	} else {
   	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
