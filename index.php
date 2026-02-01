<?php 
require 'includes/db.php'; // DB Connection

// Fetch Data limits for Index Page
$founder = $pdo->query("SELECT * FROM settings LIMIT 1")->fetch(); // Assuming founder info is here or separate table
$students = $pdo->query("SELECT * FROM students ORDER BY id DESC LIMIT 3")->fetchAll();
$instructors = $pdo->query("SELECT * FROM instructors LIMIT 3")->fetchAll();
?>

<?php include 'includes/header.php'; ?>

<section class="hero-section">
    <video autoplay muted loop playsinline class="hero-bg">
        <source src="assets/videos/hero_bg.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Welcome to <span class="gold-text">NGA</span></h1>
        <p>Software Programming & Embedded Systems Academy</p>
        <a href="#programs" class="btn-primary">Explore Programs</a>
    </div>
</section>

<section id="who-we-are" class="section-padding bg-white">
    <div class="container split-layout">
        <div class="text-block">
            <h4 class="sub-title">About NGA</h4>
            <h2>More Than Just A <span class="navy-text">Coding School</span></h2>
            <p>New Generation Academy (NGA) is a center of excellence dedicated to equipping young Rwandans with practical, production-ready skills in Software Engineering and Hardware logic.</p>
            <p>We don't just teach syntax; we teach problem-solving, project management, and innovation.</p>
        </div>
        <div class="image-block">
            <img src="assets/images/about_img.jpg" alt="Students coding" class="rounded-img shadow-lg">
        </div>
    </div>
</section>

<section id="why-us" class="section-padding bg-light">
    <div class="container text-center">
        <h4 class="sub-title">Why Choose Us</h4>
        <h2>The NGA Difference</h2>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-laptop-code"></i>
                <h3>Hands-on Coding</h3>
                <p>100% Practical curriculum.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-project-diagram"></i>
                <h3>Real Projects</h3>
                <p>Build systems that actually work.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-network-wired"></i>
                <h3>Industry Links</h3>
                <p>Connect with top tech companies.</p>
            </div>
        </div>
    </div>
</section>

<section id="programs" class="section-padding bg-white">
    <div class="container">
        <h2 class="section-heading text-center">Our Programs</h2>
        <div class="programs-grid">
            <div class="program-card">
                <div class="card-icon"><i class="fas fa-code"></i></div>
                <h3>Software Programming</h3>
                <p>HTML, CSS, JS, PHP, MySQL</p>
            </div>
            <div class="program-card">
                <div class="card-icon"><i class="fas fa-microchip"></i></div>
                <h3>Embedded Systems</h3>
                <p>C++, Arduino, IoT, Electronics</p>
            </div>
            <div class="program-card">
                <div class="card-icon"><i class="fas fa-users-cog"></i></div>
                <h3>Leadership & UI/UX</h3>
                <p>Design Thinking & Management</p>
            </div>
        </div>
    </div>
</section>

<section id="founder" class="section-padding bg-navy text-white">
    <div class="container split-layout align-center">
        <div class="image-block">
            <img src="assets/images/founder.jpg" alt="Founder" class="founder-img">
        </div>
        <div class="text-block">
            <h4 class="gold-text">Visionary Leadership</h4>
            <h2>Meet The Founder</h2>
            <blockquote class="founder-quote">
                "Our mission is to unlock the potential of the African youth through technology and innovation."
            </blockquote>
            <p><strong>Mr. Jean Claude Tuyisenge</strong></p>
            <p class="role">Managing Director</p>
        </div>
    </div>
</section>

<section id="students" class="section-padding bg-light">
    <div class="container">
        <div class="section-header-flex">
            <h2>Our Top Students</h2>
            <a href="students.php" class="btn-text">See More Students &rarr;</a>
        </div>
        
        <div class="grid-3">
            <?php foreach($students as $student): ?>
            <div class="profile-card">
                <img src="<?= htmlspecialchars($student['image_path']) ?>" alt="<?= htmlspecialchars($student['name']) ?>">
                <div class="info">
                    <h3><?= htmlspecialchars($student['name']) ?></h3>
                    <p class="role"><?= htmlspecialchars($student['cohort']) ?></p>
                    <p class="project">Project: <?= htmlspecialchars($student['project_name']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="instructors" class="section-padding bg-white">
    <div class="container">
        <div class="section-header-flex">
            <h2>Expert Instructors</h2>
            <a href="instructors.php" class="btn-text">See More Instructors &rarr;</a>
        </div>
        
        <div class="grid-3">
            <?php foreach($instructors as $inst): ?>
            <div class="profile-card">
                <img src="<?= htmlspecialchars($inst['image_path']) ?>" alt="<?= htmlspecialchars($inst['name']) ?>">
                <div class="info">
                    <h3><?= htmlspecialchars($inst['name']) ?></h3>
                    <p class="role"><?= htmlspecialchars($inst['specialty']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>