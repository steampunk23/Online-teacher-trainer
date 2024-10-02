<?php

    require 'config.php';

    $sFName = $_POST["sfname"];
    $sLName = $_POST["slname"];
    $sEmail = $_POST["semail"];
    $sTelephone = $_POST["stelephone"];
    $sSubject = $_POST["ssubject"];
    $sCountry = $_POST["scountry"];
    $sPassword = $_POST["spassword"];

    $stdSql = "INSERT INTO teacher VALUES ('$sFName', '$sLName', '$sEmail', '$sTelephone', '$sSubject', '$sCountry', '$sPassword')";

    if($con -> query($stdSql)) {
        echo "Insert Successful";
    } else {
        echo "Error".$con -> error;
    }

    $con -> close();

?>