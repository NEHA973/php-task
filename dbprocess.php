<?php
// Establish a database connection (Replace with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollNumber = $_POST["rollNumber"];
    $password = $_POST["password"];

    // Validate user credentials
    $sql = "SELECT * FROM students WHERE roll_number = '$rollNumber' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to blog page
        header("Location: blog.php");
        exit();
    } else {
        // Login failed
        echo "Invalid Roll Number or Password. Please try again.";
    }
}

// Close the database connection
$conn->close();
?>
