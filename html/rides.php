<?php
		session_start();
		$_SESSION['message']='';
				$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "rider";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$FirstName = $conn->real_escape_string($_POST['FirstName']);
			$LastName = $conn->real_escape_string($_POST['LastName']);
			$DepCity = $conn->real_escape_string($_POST['DepCity']);
			$DesCity = $conn->real_escape_string($_POST['DesCity']);
			
			$email = $conn->real_escape_string($_POST['Email']);
			$password = md5($_POST['Password']);
			
			$sql = "INSERT INTO rides(FirstName, LastName,DepCity,DesCity,Seat,Email,Password,Phone,Date)"
			. "VALUES ('$FirstName','$LastName','$DepCity','$DesCity','$Seat','$Email','$Password','$Phone','$Date')";
			
			if($conn->query($sql) === true){
				$_SESSION['message']="Registration Succesful! Welcome $FirstName in Rider's Family!";
				header('location:index.html');
			}
			else 
				$_SESSION['message']="Registration Unsuccesful! ";
		}
		
			
     ?>   
        