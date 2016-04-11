

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failedddd: " . $conn->connect_error);
} 
$x=$_GET['index'];
$y=$_GET['value'];
$sql = "INSERT INTO `array`(`index`, `value`) VALUES ($x,$y)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
