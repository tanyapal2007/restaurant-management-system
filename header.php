
<?php
                        session_start();
                ?>
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 px-lg-5 py-3 py-lg-0 fixed-top">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="index.php" class=" nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <a href="menu.php" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="booking.php" class="dropdown-item">Booking</a>
                        <a href="team.php" class="dropdown-item">Our Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                
                 <?php if (isset($_SESSION['user_id'])): ?>
                              <a href="profile.php" class="nav-item nav-link">Profile</a>
                              <a href="myproduct.php" class="nav-item nav-link">My Products </a>
                              <a href="backend/logout.php" class="nav-item nav-link text-danger">Logout</a>
                    <?php else: ?>
                                <a href="login.php" class="nav-item nav-link">Login</a>
                                <a href="signup_page.php" class="nav-item nav-link">Sign Up</a>
                    <?php endif; ?>

            </div>
            <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
