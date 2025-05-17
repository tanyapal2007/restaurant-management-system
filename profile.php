
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restoran - User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap and other stylesheets -->
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php';
include("backend/db_connection.php");
 ?>
<?php

        if (!isset($_SESSION["user_id"])) {
            header("Location: login.php");
            exit();
        }

        $user_id = $_SESSION["user_id"];

        $sql = "SELECT email, image FROM users WHERE id = $user_id";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $email = $row["email"];
            $image = $row["image"];
        } else {
            echo "❌ User not found";
            exit();
        }
?>

<!-- Bootstrap Container -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-4">Welcome to Your Profile</h3>

        <div class="d-flex justify-content-center mb-3">
            <img src="user_images/<?php echo htmlspecialchars($image); ?>" 
                 alt="Profile Picture"
                 class="rounded-circle border border-primary"
                 style="width: 140px; height: 140px; object-fit: cover;"
                 onerror="this.onerror=null;this.src='img/default-profile.jpg';">
        </div>

        <p class="text-center fs-5"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>

        <div class="d-flex justify-content-center">
            <a href="update.php?user_id=<?php echo urlencode($user_id); ?>" class="btn btn-primary px-4">
                <i class="fas fa-edit me-2"></i> Edit Profile
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
