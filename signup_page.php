<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vendor CSS Libraries -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Template Styles -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php
            include 'header.php'
       ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  
  <div class="card shadow rounded-lg w-100" style="max-width: 500px;">
    <div class="card-header bg-warning text-dark text-center font-weight-bold">
      <h4 class="mb-0">Create Your Account</h4>
    </div>
    <div class="card-body">
      <form action="backend/signup.php" method="POST" enctype="multipart/form-data" onsubmit="return checkPasswords();">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" id="phone" class="form-control" required pattern="[0-9]{10}">
        </div>

        <div class="form-group">
          <label for="image">Profile Image</label>
          <input type="file" name="image" id="image" class="form-control-file" accept="image/*" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
          <small class="text-danger d-none" id="password-error">Passwords do not match!</small>
        </div>

        <button type="submit" class="btn btn-warning btn-block font-weight-bold">Sign Up</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Password Match Script -->
<script>
  function checkPasswords() {
    const password = document.getElementById("password").value;
    const confirm = document.getElementById("confirm_password").value;
    const error = document.getElementById("password-error");

    if (password !== confirm) {
      error.classList.remove("d-none");
      return false;
    } else {
      error.classList.add("d-none");
      return true;
    }
  }
</script>

<?php include 'footer.php'; ?>
</body>
</html>
