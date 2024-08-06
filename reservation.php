<?php


$conn=mysqli_connect("localhost","root","","reservation");
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['book']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $seats = $_POST['seats'];
	 $date = $_POST['date'];
     $time = $_POST['time'];


	 $sql_query = "insert into reserved VALUES (CURRENT_TIMESTAMP,'$name','$email','$mobile','$seats','$date','$time')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include'booked.html';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>