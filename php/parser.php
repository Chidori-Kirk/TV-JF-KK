<?php
if ( isset($_POST['user-name']) && isset($_POST['user-email']) && isset($_POST['user-message'])){
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $msg = nl2br($_POST['user-message']);
    $to = 'jake@jakeford.io, k.kratohvil@yahoo.com, aerisher@gmail.com';
    $from = $email;
    $subject = 'Message from Contact Form';
    $message = '<strong>Name</strong>: ' . $name . '\n<strong>Email</strong>: ' . $email . '\n<p>' . $msg . '</p>';
    $headers = "From:" . $from . '\n';
    $headers = 'Mime-version: 1.0 \n';
    $headers = "content-type: text/html; charset=iso-8859-1 \n";

    if( mail($to, $subject, $message, $headers)){
        echo 'success';
    }else{
        echo 'The server failed to send the message. Try again later!';
    }
}
?>