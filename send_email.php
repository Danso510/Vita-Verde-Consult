<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mobile = htmlspecialchars($_POST["mobile"]);
    $service = htmlspecialchars($_POST["service"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "dansookyere15@gmail.com";
    $subject = "NEW FORM SUBMISSION FROM WEBSITE";
    $body = "Name: $name\nEmail: $email\nMobile: $mobile\nService: $service\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent succesfully!";
    } else {
        echo "Sorry, something went wrong. Try again";
    }
}