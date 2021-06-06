<?php

if (isset($_POST['submit'])) {
    
    $name = trim($_POST['name']);  //trm remove white space both left and right
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    
    $myMail = "info@mail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". <br><br>" . $message;
    
    //1. emial your sending to
    //2. subject
    //3. message
    
    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mailsuccessful");
    
}







?>