<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" description="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Blog.css">
</head>
<body>
    <!-- header -->
    <section class="main_landing_section">
        <nav class="navbar">
            <div>
                <img src="danidu_src/logo.png" alt="TeachConnect Logo">
            </div>

            <ul class="navbarlist">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>

            <div class="search_bar">
                <form>
                    <input type="search" placeholder="Search Courses">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>

            <div class="nav_buttons">
                <button class="register_button">Register</button>
                <button class="login_button">Login</button>
            </div>
        </nav>
    </section>

    <!-- slider -->
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <?php
            // Include database connection
            include 'config.php';  // Ensure the correct path to your database connection file

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
    
    <script src="Blog.js"></script>
</body>
</html>
