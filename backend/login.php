<?php
session_start();
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // ✅ Use password_verify for hashed passwords
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["email"] = $row["email"];

          header("Location: ../profile.php?id=".$row["id"]);
exit();
        } else {
            echo "❌ Incorrect password";
        }
    } else {
        echo "❌ Email not found";
    }
}
?>

