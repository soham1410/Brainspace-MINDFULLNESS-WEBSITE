<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Blog</title>
    <link rel="stylesheet" href="blogshow.css">

</head>
<body>

<div class="container">
    <h1>Blog</h1>

    
<?php
// Database connection parameters
$host = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "blog"; // MySQL database name

// Create a new MySQLi instance
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful and form is submitted, insert feedback into database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data submitted via POST method
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert data into the database
    $sql = "INSERT INTO blog (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo " ";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve stored feedback from the database
$sql = "SELECT * FROM blog ORDER BY id DESC";
$result = $conn->query($sql);

// Display feedback
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<strong>Name:</strong> " . $row['name'] . "<br>";
        echo "<strong>Email:</strong> " . $row['email'] . "<br>";
        echo "<strong>Blog:</strong> " . $row['message'] . "<br><hr>";
        

    }
} else {
    echo "No Blog yet.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>