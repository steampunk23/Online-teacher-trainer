<!DOCTYPE html>
<html lang="en">
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="Addcourse.css">
</head>
<body>
    <div class="container">
        <h3>Add New Category Details</h3>
        <form action="insertcourse.php" method="POST">
            <div class="input-field">
                <input type="text" name="trainerid" placeholder="Your ID">
            </div>
            <div class="input-field">
                <input type="text" name="coursename" placeholder="course Name">
            </div>
            <div class="input-field">
                <textarea name="coursedescription" placeholder="course description"></textarea>
            </div>
            <div class="input-field">
                <input type="text" name="courseprice" placeholder="course Price">
            </div>
            <div>
                <button type="submit">Add New Course</button>
            </div>
        </form>
    </div>
    
</body>
</html>