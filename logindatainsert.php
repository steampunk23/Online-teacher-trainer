<?php
    session_start();
?>

<?php
    require 'config.php'; // Database connection

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_or_username = $_POST['logemail'];
        $password = $_POST['logpassword'];
    

        // Check in teacher table
        $teacher_query = "SELECT * FROM teacher WHERE (email = ?) AND password = ? AND teacher_id = ?";
        $stmt = $con->prepare($teacher_query);
        $stmt->bind_param("ss", $email_or_username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Teacher login successful
            $teacher = $result->fetch_assoc();
            $_SESSION['user_id'] = $teacher['teacher_id'];
            echo "Welcome Teacher, " . $teacher['fname'];
            header("Location: "); // Handle teacher login here (e.g., redirect to teacher dashboard)
            exit;
        }

        // Check in trainer table
        $trainer_query = "SELECT * FROM trainer WHERE (email = ?) AND password = ? AND trainer_id = ?";
        $stmt = $con->prepare($trainer_query);
        $stmt->bind_param("ss", $email_or_username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Trainer login successful
            $trainer = $result->fetch_assoc();
            $_SESSION['user_id'] = $trainer['trainer_id'];
            echo "Welcome Trainer, " . $trainer['fname'];
            header("Location: "); // Handle trainer login here (e.g., redirect to trainer dashboard)
            exit;
        }

        // Check in admin table
        $admin_query = "SELECT * FROM admin WHERE (email = ? OR username = ?) AND password = ? AND admin_id = ?";
        $stmt = $con->prepare($admin_query);
        $stmt->bind_param("sss", $email_or_username, $email_or_username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Admin login successful
            $admin = $result->fetch_assoc();
            $_SESSION['user_id'] = $admin['admin_id'];
            echo "Welcome Admin, " . $admin['fname'];
            header("Location: "); // Handle admin login here (e.g., redirect to admin dashboard)
            exit;
        }

        // If no user is found in any table
        echo "Invalid login credentials. Please try again.";
    }

    $con->close();
?>
