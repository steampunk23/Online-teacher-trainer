<?php
    $conn=new mysqli("localhost","root","","online_teacher_trainer");

    if($conn->connect_error)
    {
        die("Connection failed: ".$conn->connect_error);
    }

    else
    {
        echo "Connected successfully";
    }
?>