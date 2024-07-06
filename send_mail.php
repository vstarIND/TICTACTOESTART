<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name)) {
        $to = "vedanttiwari809@gmail.com";
        $subject = "New User Submission";
        $message = "New user sign up:\n\nName: $name\nEmail: $email";
        $headers = "From: no-reply@yourdomain.com";

        if (mail($to, $subject, $message, $headers)) {
            header("Location: MAIN.html"); // Redirect after successful email sending
            exit();
        } else {
            echo "Error sending email.";
        }
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request.";
}
?>
