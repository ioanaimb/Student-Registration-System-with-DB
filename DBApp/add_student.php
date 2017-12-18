<?php 
$servername = "localhost";
$username = "root";
$password = "student";
$dbname = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
		$firstName = $_POST["first_name"];
		$lastName = $_POST["last_name"];
		$address = $_POST["address"];
		$age = $_POST["age"];
		echo $lastName;

// prepare and bind
$stmt = $conn->prepare("INSERT INTO student (firstName, lastName, Address, age) VALUES (?,?,?,?)");
$stmt->bind_param("sssi", $firstName, $lastName, $address, $age);
$stmt->execute();
// set parameters and execute

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header('Location: students.php');
 ?>