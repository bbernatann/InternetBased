<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a table
$sql = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    gender ENUM('Male', 'Female') NOT NULL
)";


// Retrieve the form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$gender = $_POST['gender'];


// Validate the form data (server-side)
$errors = array();

if (empty($fullname)) {
    $errors[] = "You cannot leave this field blank";
}

if (empty($email)) {
    $errors[] = "You cannot leave this field blank";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email address not fount!";
}

if (empty($gender)) {
    $errors[] = "You cannot leave this field blank";
}

// Insert the data into the "students" table
if (empty($errors)) {
    $insert_sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullname' , '$email' , '$gender')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "You are registered!";
    } else {
        echo "Something went wrong: " . $conn->error;
    }
} else {
    // Display error messages
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
