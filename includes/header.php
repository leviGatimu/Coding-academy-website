<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Generation Academy</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>



<header class="site-header">
    <div class="logo-container">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="NGA Logo" class="site-logo">
        </a>
    </div>

    <nav class="desktop-nav">
        <a href="index.php">Home</a>
        <a href="#who-we-are">Who We Are</a>
        <a href="#programs">Programs</a>
        <a href="#founder">Founder</a>
        <a href="contact.php" class="btn-nav-apply">Apply Now</a>
    </nav>

    <div class="hamburger" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>

    <div class="mobile-drawer" id="mobileDrawer">
        <span class="close-drawer" onclick="toggleMenu()">&times;</span>
        <div class="drawer-logo">
            <img src="assets/images/logo.png" alt="NGA">
        </div>
        <ul class="drawer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#who-we-are">Who We Are</a></li>
            <li><a href="#programs">Programs</a></li>
            <li><a href="#founder">Founder</a></li>
            <li><a href="students.php">Our Students</a></li>
            <li><a href="instructors.php">Instructors</a></li>
            <li><a href="contact.php" class="btn-drawer-apply">Apply Now</a></li>
        </ul>
    </div>
    <div class="drawer-overlay" id="drawerOverlay" onclick="toggleMenu()"></div>
</header>