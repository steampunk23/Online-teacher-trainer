<?php

$con = new mysqli("localhost", "root", "", "test");

if($con -> connect_error) {
    die("connection failed ".$con -> connect_error);
} 

?>