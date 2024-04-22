<?php
// Database connection parameters
$host = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "contact"; // MySQL database name

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
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo " ";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve stored feedback from the database
$sql = "SELECT * FROM contact ORDER BY id DESC";
$result = $conn->query($sql);
// Display feedback
if ($result->num_rows > 0) {
    // Output JavaScript for showing a pop-up and redirecting
    echo '<script>';
    echo 'alert("Your message has been sent. Calm Quest is on their way to contact you");';
    echo 'window.history.back();'; // Redirect to the previous page
    echo '</script>';
} else {
    echo "No contact yet yet.";
}

// Close the database connection
$conn->close();
?>
