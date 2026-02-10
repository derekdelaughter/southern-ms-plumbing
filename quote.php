<?php
$ownerEmail = "YOUR_EMAIL_HERE";

$name = $_POST['name'];
$email = $_POST['email'];
$details = $_POST['details'];

/* Email to owner */
$subjectOwner = "Southern MS Plumbing - Quote Request";
$bodyOwner = "Name: $name\nEmail: $email\n\nProject Details:\n$details";
$headersOwner = "From: $email";

mail($ownerEmail, $subjectOwner, $bodyOwner, $headersOwner);

/* Confirmation email to requester */
$subjectUser = "Quote Request Received - Southern MS Plumbing";
$bodyUser = "Hello $name,

Thank you for requesting a quote.
We’ve received your project details and will review them shortly.

— Southern MS Plumbing";
$headersUser = "From: $ownerEmail";

mail($email, $subjectUser, $bodyUser, $headersUser);

header("Location: index.html");
?>