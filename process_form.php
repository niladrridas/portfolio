<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Send an email
    $to = "ndas1262000@gmail.com";
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email";

    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers);

    header("Location: thank_you.html");
    exit();
}
?>
