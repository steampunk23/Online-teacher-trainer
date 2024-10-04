<?php

    require 'config.php';

    $email = $_POST['logemail'];
    $password = $_POST['logpassword'];

    $stmt = $con -> prepare("Select * from trainer where email = ?");
    $stmt  -> bind_param("s", $email);
    $stmt -> execute();
    $stmt_result = $stmt -> get_result();


    if($stmt_result -> num_rows > 0) {
        $data = $stmt_result -> fetch_assoc();
        if($data['password'] === $password) {
            echo "<h2>Login successfully</h2>";
        } else {
            echo "<h2>Invalid Email or password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or password</h2>";
    }

?>