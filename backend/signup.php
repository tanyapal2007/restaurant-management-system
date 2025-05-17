<?php
session_start();
include("db_connection.php");

// Receive form data
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone    = $_POST['phone'];
$password = $_POST['password'];
$confirm  = $_POST['confirm_password'];
$image    = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];

// Check if email is already registered
$check_sql = "SELECT * FROM users WHERE email = '$email'";
$check_result = mysqli_query($conn, $check_sql);

if ($check_result && mysqli_num_rows($check_result) > 0) {
    echo "<script>alert('⚠️ Email is already registered!'); window.history.back();</script>";
    exit();
}

// Password match check
if ($password !== $confirm) {
    echo "<script>alert('❌ Passwords do not match'); window.history.back();</script>";
    exit();
}

// Image upload
$target_dir = "../user_images/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($image);
if (!move_uploaded_file($tmp_name, $target_file)) {
    echo "<script>alert('❌ Failed to upload image.'); window.history.back();</script>";
    exit();
}

// Secure password hash
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user data into database
$sql = "INSERT INTO users (name, email, phone_no, image, password)
        VALUES ('$name', '$email', '$phone', '$image', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('✅ Signup successful! Please login.'); window.location.href='../login.php';</script>";
    exit();
} else {
    echo "<script>alert('❌ Error during registration: " . mysqli_error($conn) . "'); window.history.back();</script>";
    exit();
}
?>
