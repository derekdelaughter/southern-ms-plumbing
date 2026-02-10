<<?php

/* ===============================
   CONFIG – EDIT THESE VALUES
   =============================== */

$ownerEmail = "YOUR_EMAIL_HERE"; // <-- put your email here
$uploadDir = "uploads/";

/* ===============================
   FILE UPLOAD HANDLING
   =============================== */

$fileName = basename($_FILES["contractor_file"]["name"]);
$targetFile = $uploadDir . $fileName;

/* Capture checkbox selections */
$docs = isset($_POST['docs']) ? implode(", ", $_POST['docs']) : "None specified";

/* Attempt file upload */
if (move_uploaded_file($_FILES["contractor_file"]["tmp_name"], $targetFile)) {

    /* ===============================
       EMAIL NOTIFICATION TO OWNER
       =============================== */

    $subject = "New Contractor File Uploaded - Southern MS Plumbing";

    $body = "A new contractor document has been uploaded.\n\n"
          . "File Name: $fileName\n"
          . "Documents Included: $docs\n"
          . "Upload Time: " . date("Y-m-d H:i:s") . "\n\n"
          . "Please review the file in the uploads directory.";

    $headers = "From: no-reply@southernmsplumbing.com";

    mail($ownerEmail, $subject, $body, $headers);

    /* ===============================
       USER CONFIRMATION PAGE
       =============================== */

    echo "<h3>File uploaded successfully.</h3>";
    echo "<p><strong>File:</strong> $fileName</p>";
    echo "<p><strong>Documents included:</strong> $docs</p>";
    echo "<p>Southern MS Plumbing has been notified.</p>";

} else {

    echo "<h3>Error uploading file.</h3>";
    echo "<p>Please try again or contact Southern MS Plumbing.</p>";
}

?>