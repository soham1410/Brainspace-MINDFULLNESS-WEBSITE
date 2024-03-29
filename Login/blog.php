<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog writing </title>
    <h1>BLOG WRITING</h1>
    <h2>This is a place where you can share your part of life without any hesitation</h2>
    <style>
        /* CSS for feedback form */
        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #A3EBB1;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 120px;
        }

        input[type="submit"] {
            background-color: #E25A25;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* CSS for form placeholders */
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #aaa;
        }
        ::-moz-placeholder { /* Firefox 19+ */
            color: #aaa;
        }
        :-ms-input-placeholder { /* IE 10+ */
            color: #aaa;
        }
        :-moz-placeholder { /* Firefox 18- */
            color: #aaa;
        }

        /* CSS for form labels */
        label {
            font-weight: bold;
        }

        /* CSS for page background */
        body {
            background-color: #116530;
            font-family: Arial, sans-serif;
            text-align: center;
            /*background-image: url('f3.png');*/
        }
    </style>
</head>
<body>
    
    <form action="blogshow.php" method="post">
        <h1>BLOG WRITING</H1>
        <label for="name">Your Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Your Name" required><br><br>
        <label for="email">Your Email:</label><br>
        <input type="email" id="email" name="email" placeholder="Your Email" required><br><br>
        <label for="message">Your Blog:</label><br>
        <textarea id="message" name="message" placeholder="Your Blog" required></textarea><br><br>
        
        <input type="submit" value="Submit Your Blog">
        <a href="index.php">&larr; Go back to homepage</a>
            
    

    </form>
</body>
</html>
