<?php

if (isset($_POST['email'])) {

$to = "$_POST['email']";
$subject = "";
$message = "";
mail($to, $subject, $message);

$your_email = "egobits1@gmail.com";
$subject_to_you = "someone subscribed to your news letter";
$message_to_you = "";
mail($your_email, $subject_to_you, $message_to_you);

}
?>