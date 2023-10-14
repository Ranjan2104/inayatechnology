<?php
if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];
    
    // Create an email message
    $to = "inayatech01@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";
    
    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Message sent successfully!";
    } else {
        // Email sending failed
        echo "An error occurred while sending the message.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
