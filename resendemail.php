<?php
// Check if the email address parameter is provided
if(isset($_POST['email'])) {
    // Retrieve the email address from the POST parameters
    $email = $_POST['email'];

    // Generate a verification link (replace example.com with your domain)
    $verificationLink = "https://example.com/verify.php?email=" . urlencode($email);

    // Compose the email message
    $subject = "Verify Your Email Address";
    $message = "Dear user,\n\nPlease click the following link to verify your email address:\n$verificationLink\n\nBest regards,\nThe Dribbble Team";

    // Send the email
    $headers = "From: your@example.com\r\n";
    $headers .= "Reply-To: your@example.com\r\n";
    $headers .= "Content-type: text/plain\r\n";
    mail($email, $subject, $message, $headers);

    // Return a success message
    echo "Verification email sent successfully.";
} else {
    // Return an error message if the email parameter is not provided
    echo "Error: Email address not provided.";
}
?>
