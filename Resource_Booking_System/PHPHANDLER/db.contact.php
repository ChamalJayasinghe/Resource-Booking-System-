<?php

    $Name = $_POST['name'];
    $mnumber = $_POST['number'];
	$email = $_POST['email'];
	$message = $_POST['massage'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','mount_bee');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	else {
		$stmt = $conn->prepare("insert into contactus(Name,email,mnumber,message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Name,$email, $mnumber,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Your Massage successfully saved ...";
		header('Location: ../PHP/contactus.php');
		$stmt->close();
		$conn->close();
	}

?>







