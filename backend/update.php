<?php
session_start();
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate ID
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        echo "User ID is missing.";
        exit();
    }

    $id = intval($_POST['id']);  // Make sure this is declared before using it
    $email = $_POST['email'];
    $imageName = null;

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $fileTmp = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowed)) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            exit();
        }

        $imageName = uniqid("img_") . '.' . $ext;
        move_uploaded_file($fileTmp, "../user_images/" . $imageName);
    }

    // Build query
    if ($imageName) {
        $sql = "UPDATE users SET email = '$email', image = '$imageName' WHERE id = $id";
    } else {
        $sql = "UPDATE users SET email = '$email' WHERE id = $id";
    }

    // Execute query
    if (mysqli_query($conn, $sql)) {
        header("Location: ../profile.php");
        exit();
    } else {
        echo "SQL Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
?>
