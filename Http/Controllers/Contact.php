<?php
class Contact
{


	public function Contact() {
		//$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "PRS";

// Create connection
$conn = new mysqli("localhost", "venkatPC", "Password", "PRS");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO POC (firstname, lastname, email)
VALUES ('Venkat', 'P', 'vnktrmna@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	}
}