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

// Function to generate an 8-digit password
function generatePassword() {
    return mt_rand(10000000, 99999999);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rollNumber = $_POST["rollNumber"];
    $password = generatePassword();

    // Insert data into the students table
    $sql = "INSERT INTO students (name, email, roll_number, password) VALUES ('$name', '$email', '$rollNumber', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
