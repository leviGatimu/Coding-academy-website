<?php 
require 'includes/db.php'; 

// Fetch Dynamic Data (with fail-safes if DB is empty)
try {
    $founder = $pdo->query("SELECT * FROM settings LIMIT 1")->fetch(); 
    $students = $pdo->query("SELECT * FROM students ORDER BY id DESC LIMIT 3")->fetchAll();
    $instructors = $pdo->query("SELECT * FROM instructors LIMIT 3")->fetchAll();
} catch (Exception $e) {
    // Silent fail or default empty arrays
    $students = [];
    $instructors = [];
}
?>

<?php include 'includes/header.php'; ?>

<section class="hero-section sticky-hero">
    <video autoplay muted loop playsinline class="hero-bg">
        <source src="assets/videos/hero_bg.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div> 
    
    <div class="hero-content parallax-text">
        <h1 class="reveal-text">Welcome to <span class="gold-text">NGA</span></h1>
        <p class="reveal-text delay-100">Software Programming & Embedded Systems Academy</p>
        <a href="#programs" class="btn-primary reveal-text delay-200">Explore Programs</a>
    </div>
</section>

<div class="content-layer">
    
    <div class="wave-container">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192V320H1392C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320H0Z"></path>
        </svg>
    </div>

    <section id="who-we-are" class="section-padding bg-white" style="position: relative; z-index: 20;">
        <div class="container split-layout">
            <div class="text-block">
                <h4 class="sub-title reveal-text">About NGA</h4>
                <h2 class="reveal-text delay-100">More Than Just A <span class="navy-text">Coding School</span></h2>
                <p class="reveal-text delay-200">New Generation Academy (NGA) is a center of excellence dedicated to equipping young Rwandans with practical, production-ready skills.</p>
                <p class="reveal-text delay-200">We don't just teach syntax; we teach problem-solving, project management, and innovation.</p>
            </div>
            <div class="image-block reveal-image">
                <img src="assets/images/about_img.jpg" alt="Students coding" class="rounded-img shadow-hover">
            </div>
        </div>
    </section>

    <section id="why-us" class="section-padding bg-light">
        <div class="container text-center">
            <h4 class="sub-title reveal-text">Why Choose Us</h4>
            <h2 class="reveal-text delay-100">The NGA Difference</h2>
            <div class="features-grid">
                <div class="feature-card reveal-card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Hands-on Coding</h3>
                    <p>100% Practical curriculum.</p>
                </div>
                <div class="feature-card reveal-card delay-100">
                    <i class="fas fa-project-diagram"></i>
                    <h3>Real Projects</h3>
                    <p>Build systems that actually work.</p>
                </div>
                <div class="feature-card reveal-card delay-200">
                    <i class="fas fa-network-wired"></i>
                    <h3>Industry Links</h3>
                    <p>Connect with top tech companies.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="section-padding bg-white">
        <div class="container">
            <h2 class="text-center reveal-text">Our Programs</h2>
            <div class="programs-grid">
                <div class="program-card reveal-card">
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>Software Programming</h3>
                    <p>HTML, CSS, JS, PHP, MySQL</p>
                </div>
                <div class="program-card reveal-card delay-100">
                    <div class="card-icon"><i class="fas fa-microchip"></i></div>
                    <h3>Embedded Systems</h3>
                    <p>C++, Arduino, IoT</p>
                </div>
                <div class="program-card reveal-card delay-200">
                    <div class="card-icon"><i class="fas fa-users-cog"></i></div>
                    <h3>Leadership</h3>
                    <p>Design Thinking</p>
                </div>
            </div>
        </div>
    </section>

    <section id="founder" class="section-padding bg-navy text-white">
        <div class="container split-layout align-center">
            <div class="image-block reveal-scale-up">
                <img src="assets/images/founder.jpg" alt="Founder" class="founder-img">
            </div>
            <div class="text-block">
                <h4 class="gold-text reveal-text">Visionary Leadership</h4>
                <h2 class="reveal-text delay-100">Meet The Founder</h2>
                <blockquote class="founder-quote reveal-text delay-200">
                    "Our mission is to unlock the potential of the African youth through technology and innovation."
                </blockquote>
                <div class="reveal-text delay-300">
                    <p><strong>Mr. Jean Claude Tuyisenge</strong></p>
                    <p class="role" style="color:#aaa;">Managing Director</p>
                </div>
            </div>
        </div>
    </section>

    <section id="students" class="section-padding bg-light">
        <div class="container">
            <div class="section-header-flex reveal-text" style="display:flex; justify-content:space-between; align-items:center;">
                <h2>Our Top Students</h2>
                <a href="students.php" class="btn-text" style="color:var(--navy); font-weight:bold; border-bottom:2px solid var(--gold);">See More &rarr;</a>
            </div>
            
            <div class="grid-3">
                <?php foreach($students as $k => $student): ?>
                <div class="profile-card reveal-card delay-<?= $k ?>00">
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
            <h2 class="reveal-text">Expert Instructors</h2>
            <div class="grid-3">
                <?php foreach($instructors as $k => $inst): ?>
                <div class="profile-card reveal-card delay-<?= $k ?>00">
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
</div>