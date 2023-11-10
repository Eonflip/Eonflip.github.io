<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; // the name attribute from input tag
    $email = $_POST['email']; // the name attribute from input tag
    $subject = $_POST['subject']; // the name attribute from input tag
    $message = $_POST['message']; // the name attribute from textarea tag

    $to = 'ianj1993@gmail.com';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if(mail($to, $subject, $body)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email failed to send, please fill in all fields.';
    }
}
?>
