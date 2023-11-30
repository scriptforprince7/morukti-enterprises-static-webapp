<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Compose email content
        $to = "scriptforprince@gmail.com"; // Replace with your email address
        $subject = "New Contact Form Submission: $subject";
        $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";

        // Send email
        mail($to, $subject, $messageBody);

        // Redirect or display success message
        header("Location: thank_you.html");
        exit();
    } else {
        // Invalid email address, handle accordingly
        echo "Invalid email address";
    }
}
?>
