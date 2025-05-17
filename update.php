
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restoran - Edit Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <h3 class="text-center mb-4">Edit Your Profile</h3>
<?php
include("backend/db_connection.php");

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
        <form method="post" action="backend/update.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($user_id); ?>">

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                <div class="invalid-feedback">
                    Please enter a valid email.
                </div>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Change Profile Image</label>
                <input class="form-control" type="file" id="image" name="image" accept="image/*">
            </div>

            <div class="mb-3 text-center">
                <p><strong>Current Image:</strong></p>
                <img src="user_images/<?php echo htmlspecialchars($image); ?>" 
                     alt="Current Image" 
                     class="rounded-circle border border-secondary"
                     style="width: 80px; height: 80px; object-fit: cover;"
                     onerror="this.onerror=null;this.src='img/default-profile.jpg';">
            </div>

            <button type="submit" class="btn btn-success w-100">Update Profile</button>
        </form>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Bootstrap validation example
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>
