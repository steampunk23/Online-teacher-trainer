<?php

//data base connction

require_once 'config.php';

if(isset($_GET['msg_id'])){
    $msg_id  = $_GET['msg_id'];

    //retrive the details
    $sql="SELECT*FROM contact_us WHERE msg_id  = '$msg_id' ";
    $result= $con->query($sql);

    if ($result->num_rows>0){
    $row=$result->fetch_assoc();
    $message = $row["message"];



    // form
    echo "<form action='update_insert.php' method='post'>";
    echo "<input type='hidden' name='msg_id' value='$msg_id'>";             
    echo "<label>Message :</label>";
    echo "<textarea cols='30' rows='8' placeholder='Your message' name='message'>" . $message . "</textarea>";   
    echo "<input type='submit' value='submit' class='contact_us_button'>";      
    echo "</form>";}
    

    else {
    echo "No record available";
    }
}

else {
    echo "ID parameter is misiing";
}








?>