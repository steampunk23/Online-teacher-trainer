<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <link rel="stylesheet" href="course.css">
</head>
<body>
    <?php
        require 'config.php';
    
        $testSql = "SELECT title, course_id, description FROM courses";
        $result = $con -> query($testSql);

        if($result -> num_rows > 0) {
            while($row = $result -> fetch_assoc()) {
                echo "<div class='course-container'>";
                echo "<div class='coursecontent'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p>" . $row['description'] . "</p>";
                echo "<p>" . $row['course_id'] . "</p>";

                echo "<form action='update.php' method='post'>"; 
                echo "<input type='hidden' name='id' value='" . $row['course_id'] . "'>"; 
                echo "<button type='submit'>Update</button>";
                echo "</form>";

                echo "<form action='delete.php' method='post'>";
                echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['course_id']) . "'>";
                echo "<button type='submit' onclick='return confirm(\"Are you sure you want to delete this course?\")'>Delete</button>";
                echo "</form>";

                echo "</div>";
                echo "</div>";
            }
        }
        
        $con -> close();
    ?>
</body>
</html>