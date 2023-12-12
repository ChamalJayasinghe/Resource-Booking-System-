<?php   

	$card_name = $_POST['pname'];
    $card_number=$_POST['cardnum'];
    $Card_type= $_POST['cardtype'];
	$Expyear= $_POST['year'];
    $Expmonth= $_POST['month'];

	// Database connection
	$conn = new mysqli('localhost','root','','mount_bee');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into payment(card_name,card_number,Card_type,Expyear,Expmonth) values( ?,?,?,?,?)");
		
		$stmt->bind_param("sssss",$card_name,$card_number,$Card_type,$Expyear,$Expmonth);
		$execval = $stmt->execute();
		echo $execval;
        echo "<html>
        <head>
            <link rel='stylesheet' href='paye.css'>
        </head>
        <body>
            <div class='containerphp'>
			
                <center><img src='../IMAGES/Pay/right2.jpg' ></center>
                <center><p>Your payemant is successfully done</p></center>
            </div>
            
        </body>
        </html>";

		$stmt->close();
		$conn->close();
	}

?>












































	
