<?php
// Connecting to a MySQL database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error connecting to database: " . $conn->connect_error);
}

// Querying registered student information
$sql = "SELECT* FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Students</h2>";
    echo "<table>";
    echo "<tr><th style='padding: 20px;'>ID</th> <th style='padding: 20px;'>Full Name</th> <th style='padding: 20px;'>Email</th> <th style='padding: 20px;'>Gender</th></tr>";


    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='padding-left: 20px;'>" . $row["id"] . "</td> <td style='padding-left: 20px;'>" . $row["full_name"] . "</td> <td style='padding-left: 20px;'>" . $row["email"] . "</td> <td style='padding-left: 20px;'>" . $row["gender"] . "</td></tr>";

    }

    echo "</table>";
} else {
    echo "No registered student found.";
}

$conn->close();
?>