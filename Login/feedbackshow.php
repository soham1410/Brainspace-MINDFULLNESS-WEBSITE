<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Feedback</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #F8C5A9;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .feedback {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #f2f2f2;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .feedback h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .feedback p {
            margin-bottom: 5px;
            font-size: 16px;
            color: #666;
        }

        .rating {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }

        .rating span {
            color: #ffd700; /* Star color */
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }
    </style>
</head> 
<body>

<div class="container">
    <h1>Feedback</h1>

    
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