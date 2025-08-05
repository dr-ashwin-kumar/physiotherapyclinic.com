<?php
    // Include DB connection
    include 'db.php';

    // Get POST data
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Simple validation
    if (!$name || !$email || !$message) {
        echo "Name, Email, and Message are required.";
        exit;
    }

    // Escape inputs to prevent SQL injection
    $name    = mysqli_real_escape_string($conn, $name);
    $email   = mysqli_real_escape_string($conn, $email);
    $phone   = mysqli_real_escape_string($conn, $phone);
    $subject = mysqli_real_escape_string($conn, $subject);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert into DB
    $sql = "INSERT INTO submissions (name, email, phone, subject, message) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
