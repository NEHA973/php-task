<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .blog-post {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        .blog-image {
            max-width: 50%;
            height: 200px;
        }
    </style>
</head>
<body>
    <h2>Blog Posts</h2>
    
    <?php
    // Establish a database connection (Replace with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve blog posts from the database
    $sql = "SELECT * FROM blogs";
    $result = $conn->query($sql);

    // Display each blog post
    while ($row = $result->fetch_assoc()) {
        echo '<div class="blog-post">';
        echo '<h3>' . $row['title'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<img src="' . $row['image_url'] . '" alt="Blog Image" class="blog-image">';
        echo '</div>';
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
