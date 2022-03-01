<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "info@bolstercampus.in";
    $subject = "Bolster Contact From";
    $headers = "From: Bolster Web Master<no-reply-webmaster@bolstercampus.in>";
    $body =  "
    Name: ".$name."\r\n
    Email: ".$email."\r\n
    Message: ".$message."\r\n
    \r\n\r\n\r\n
    This Email is recieved from BolsterCampus Website Forum\r\n
    Queries: web@ziqx.in
    ";
    mail($to,$subject,$body,$headers);
    } 
     ?>