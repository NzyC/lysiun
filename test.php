<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $file = $_FILES["attachment"];

    // Check if file is uploaded successfully
    if ($file["error"] === UPLOAD_ERR_OK) {
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $fileSize = $file["size"];
        $fileType = $file["type"];

        // Move file to desired location
        move_uploaded_file($fileTmpName, "uploads/$fileName");

        // Success message
        echo "File uploaded successfully.";
    } else {
        // Error message
        echo "File upload failed.";
    }
}
?>
