<?php
$servername = "sql309.epizy.com";
$username = "epiz_31041921";
$password = "n6InZqN5iS0z";
$db="epiz_31041921_portfol";

// Create connection
$conn = mysqli_connect($servername, $username, $password ,$db) ;

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject =  $_REQUEST['subject'];
$message = $_REQUEST['message'];
$sql = "INSERT INTO contactdata  VALUES ('$name', '$email','$subject','$message')";
if(mysqli_query($conn, $sql)){
	

	echo "I will read whenever i have time";
} else{
	echo "ERROR: Hush! Sorry $sql. " 
		. mysqli_error($conn);
}
  
// Close connection
mysqli_close($conn);
?>
