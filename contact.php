<<?php
$ownerEmail = "YOUR_EMAIL_HERE";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/* Email to owner */
$subjectOwner = "Southern MS Plumbing - Contact Form";
$bodyOwner = "Name: $name\nEmail: $email\n\nMessage:\n$message";
$headersOwner = "From: $email";

mail($ownerEmail, $subjectOwner, $bodyOwner, $headersOwner);

/* Confirmation email to sender */
$subjectUser = "We Received Your Message - Southern MS Plumbing";
$bodyUser = "Hello $name,

Thank you for contacting Southern MS Plumbing.
We’ve received your message and will respond as soon as possible.

— Southern MS Plumbing";
$headersUser = "From: $ownerEmail";

mail($email, $subjectUser, $bodyUser, $headersUser);

header("Location: index.html");
?>