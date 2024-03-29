<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Blogs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
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

        .blog {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .blog h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .blog p {
            margin-bottom: 5px;
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Recent Blogs</h1>

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

    // Retrieve stored blogs from the database
    $sql = "SELECT * FROM blog ORDER BY id DESC";
    $result = $conn->query($sql);

    // Display blogs
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='blog'>";
            echo "<p><strong>Name:</strong> " . $row['name'] . "</h3>";
            echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
            echo "<p><strong>Your Blog:</strong>" . $row['message'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No blogs found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

</body>
</html>
