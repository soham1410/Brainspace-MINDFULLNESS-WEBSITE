<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <h1> FEEDBACKS </h1>
    <style>
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .container,h1 {
            background-color: #FFF1D9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            max-width: 1450px;
            width: 100%;
        }

        .container,body {
            background-color: #FFF1D9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1.0);
            max-width: 1510px;
            width: 100%;
        }
        body {
            background-color: #EDAF78;
            font-family: Arial, sans-serif;
          }
          .star-rating {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .star-rating input[type="radio"] {
            display: none;
        }
        
        .star-rating label {
            font-size: 60px;
            color: #888;
            cursor: pointer;
        }
        
        .star-rating label:hover,
        .star-rating input[type="radio"]:checked ~ label {
            color: #FFD700;
        }
          
    </style>
</head>
<body>
  

<?php
// Database connection parameters
$host = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "feedback"; // MySQL database name

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
    $rating=$_POST['rating'];
    // Insert data into the database
    $sql = "INSERT INTO feedback (name, email, message,rating) VALUES ('$name', '$email', '$message','$rating')";

    if ($conn->query($sql) === TRUE) {
        echo " ";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Retrieve stored feedback from the database
$sql = "SELECT * FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);

// Display feedback
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<strong>Name:</strong> " . $row['name'] . "<br>";
        echo "<strong>Email:</strong> " . $row['email'] . "<br>";
        echo "<strong>Feedback:</strong> " . $row['message'] . "<br>";
        echo "<strong>Ratings:</strong> " . $row['rating'] . "<br><hr>";

    }
} else {
    echo "No feedback yet.";
}

// Close the database connection
$conn->close();
?>
</body>
</html>