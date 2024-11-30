<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$place = $_POST['place'];
$worker = $_POST['worker'];
$Order = $_POST['Order'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@yourwebsite.com';

$email_from = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "place: $place.\n".
                  "worker: $worker.\n".
                   "Order: $Order.\n".
                   "Subject: $subject.\n".
                    "User Message: $message.\n";

$to = 'josephnkunzi0@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: cont.html") 
header("Location: order.html") 
header("Location: order2.html") 
header("Location: order3.html")
?>