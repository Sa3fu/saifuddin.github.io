<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'saifuden786@gmail.com';

    $email_subject = "Web page request";

    $email_body = "User name: $name \n".
                    "User emaiil: $visitor_email \n".
                        "User message: $message \n";
    
    $to = "saifuden786@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html")
?>