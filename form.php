<?php

    
    $name = $_POST['fullName'];
    $phonenumber = $_POST['phoneNumber'];
    $message = $_POST['message'];

    $mail->Body    = "
    New message from Eat Me website.


    Name: $name\n
    Phone number: $phonenumber\n

    Message: $message";


    if( isset($_POST['message']) ){
        mail('kongol.ml@gmail.com', 'Eat Me - new message', $message);
        echo 'Message has been sent';
    } else {
        echo 'Message could not be sent. Please, go to the main page and enter required credentials.';
    };
?>