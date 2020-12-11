<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Customer";

// Create connection
$conn = new mysqli(localhost, root, , Customer);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (firstname, lastname, email, Mobile, City)
VALUES ('John', 'Doe', 'john@example.com', '1234567890', 'Indore')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>