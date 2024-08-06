<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $seats = $_POST['seats'];
    $date = $_POST['date'];
    $time = $_POST['time'];


	// Database connection
	$conn = new mysqli('localhost','root','','reservation');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reserved(Name, Email_ID, Mobile_no., No_of_seats, Date, Time) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiiii", $name, $email, $mobile, $seats, $date, $time);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>