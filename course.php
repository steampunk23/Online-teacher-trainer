<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <link rel="stylesheet" href="course.css">
    
</head>
<body>

<?php
    session_start();
?>

<?php
        require 'config.php';

        $user = isset($_SESSION['role']) ? $_SESSION['role']: '';
        $testSql = "SELECT title, course_id, description FROM courses";
        $result = $con -> query($testSql);

        if($result -> num_rows > 0) {

            echo "<div class='course-container'>";

            while($row = $result -> fetch_assoc()) {
                
                echo "<div class='coursecontent'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";

                if($user == 'admin' || $user == 'trainer') {
                    echo "<form action='update.php' method='post'>"; 
                    echo "<input type='hidden' name='id' value='" . $row['course_id'] . "'>"; 
                    echo "<button class='update-btn' type='submit'>Update</button>";
                    echo "</form>";

                    echo "<form action='delete.php' method='post'>";
                    echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['course_id']) . "'>";
                    echo "<button class='delete-btn' type='submit' onclick='return confirm(\"Are you sure you want to delete this course?\")'>Delete</button>";
                    echo "</form>";
                }
                echo "<a src=''><button class='buy-btn'>Buy Now</button></a>";

                echo "</div>";
                
            }
            echo "</div>";
        }
        
        $con -> close();
    ?>
    
    
</body>
</html>
