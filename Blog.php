<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" description="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Blog.css">
    <link rel="stylesheet" href="navigation_footer.css">
</head>
<body>
    <!-- Include the navigation bar -->
    <?php 
    include 'navigation_bar.html';?>
    
    <!-- slider -->
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <?php
            // Include database connection
            $con = new mysqli('localhost', 'root', '', 'online_teacher_trainer');  

            // Query to fetch blog posts from the database
            $sql = "SELECT post_id, title, description, image_path FROM blog_post";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $first = true;  // Flag to mark the first item as active
                while ($row = $result->fetch_assoc()) {
                    // Dynamically create each blog post slide
                    echo '<div class="item ' . ($first ? 'active' : '') . '">';
                    echo "<img src='" . $row['image_path'] . "' alt='Blog Image'>";
                    
                    // Make sure images are stored in the 'uploads/' folder
                    echo '<div class="description">';
                    echo '<p>NEWS & EVENT</p>';
                    echo '<h2>' . $row['title'] . '</h2>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div>'; // Close description div
                    echo '</div>'; // Close item div

                    $first = false;  // Set to false after the first item
                }
            } else {
                echo "<p>No blog posts found</p>";
            }
            ?>
        </div>

        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>

       <!-- thumbnail -->
       <div class="thumbnail">
        <?php
        // Re-fetch the data for thumbnails (only images needed)
        $sql = "SELECT image_path FROM blog_post";  // Fetch only the image for thumbnails
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $first = true;
            while ($row = $result->fetch_assoc()) {
                echo '<div class="item ' . ($first ? 'active' : '') . '">';  // Mark the first item as 'active'
                echo "<img src='" . $row['image_path'] . "' alt='Thumbnail Image'>";  // Only display the image
                echo '</div>';
                $first = false;  // Set the first flag to false after the first iteration
            }
        } else {
            echo "<p>No thumbnails found</p>";  // If no results, show a message
        }
        $con->close();  // Close the connection
        ?>
        </div>
    </div>

    <!-- Include the footer -->
        <?php include 'footer.html'; ?>
        <script src="danidu_js/script.js"></script>
    <script src="Blog.js"></script>
    
</body>
</html>
