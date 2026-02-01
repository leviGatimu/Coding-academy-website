<?php 
require 'includes/db.php'; 

// --- FETCH DYNAMIC CONTENT ---
$projects = [];
$hero = [];
$stats = [];

try {
    // 1. Fetch Hero Info
    $stmt = $pdo->query("SELECT * FROM hero_section LIMIT 1");
    $hero = $stmt->fetch(PDO::FETCH_ASSOC);

    // 2. Fetch Approved Projects
    $sql = "SELECT * FROM projects WHERE approval_status='approved' ORDER BY id DESC LIMIT 3";
    $stmt = $pdo->query($sql);
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 3. Fetch Stats (or use defaults)
    $stmt = $pdo->query("SELECT * FROM stats");
    $stats = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    // Fallback if DB fails
    $hero = ['main_heading' => 'Transformed for Community', 'video_url' => 'assets/videos/hero-bg.mp4'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Generation Academy | Excellence in Code</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div id="preloader">
    <div class="logo-loader-container">
        <div class="loader-logo">
            NGA<span class="logo-dot">.</span><span class="logo-ext">Coding Academy</span>
        </div>
        <div class="loader-progress-track">
            <div class="loader-progress-fill"></div>
        </div>
        <div class="loader-status">
            <span class="status-word">EXCELLENCE</span>
            <span class="status-separator">|</span>
            <span class="status-word">INNOVATION</span>
        </div>
    </div>
</div>

<nav class="navbar">
    <div class="logo">NGA<span style="color:var(--nga-gold)">.ACADEMY</span></div>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="academics.php">Academics</a></li>
        <li><a href="contact.php" class="btn-apply" style="margin:0; padding: 10px 20px;">Admission</a></li>
    </ul>
</nav>

<header class="hero">
    <video autoplay muted loop playsinline>
        <source src="<?= htmlspecialchars($hero['video_url'] ?? 'assets/videos/hero-bg.mp4') ?>" type="video/mp4">
    </video>
    <div class="hero-content">
        <h1><?= $hero['main_heading'] ?? 'TRANSFORMED FOR <span style="color:var(--nga-gold)">COMMUNITY</span>' ?></h1>
        <p>Empowering the next generation of Software Engineers and Embedded Systems Architects.</p>
        <a href="#programs" class="btn-apply">Explore Programs</a>
    </div>
</header>

<section id="programs" class="section" style="background: #f4f7f6;">
    <div class="section-title">
        <h4 style="color:var(--nga-gold); letter-spacing:2px; font-size:0.9rem;">Academic Tracks</h4>
        <h2>Choose Your Specialization</h2>
        <p>Hover over a card to view the curriculum details.</p>
    </div>

    <div class="program-grid">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="icon-circle"><i class="fas fa-code fa-3x"></i></div>
                    <h3>Software Programming</h3>
                    <p>Full-Stack Web Development</p>
                </div>
                <div class="flip-card-back">
                    <h3>The Stack</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> HTML5, CSS3, JS (ES6+)</li>
                        <li><i class="fas fa-check"></i> PHP Backend Architecture</li>
                        <li><i class="fas fa-check"></i> MySQL Database Design</li>
                        <li><i class="fas fa-check"></i> Git Version Control</li>
                    </ul>
                    <a href="academics.php" class="btn-flip">View Syllabus</a>
                </div>
            </div>
        </div>
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="icon-circle"><i class="fas fa-microchip fa-3x"></i></div>
                    <h3>Embedded Systems</h3>
                    <p>Hardware & IoT Logic</p>
                </div>
                <div class="flip-card-back">
                    <h3>The Tech</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> C++ Programming</li>
                        <li><i class="fas fa-check"></i> Arduino & Raspberry Pi</li>
                        <li><i class="fas fa-check"></i> Circuit Logic & Sensors</li>
                        <li><i class="fas fa-check"></i> PCB Design Basics</li>
                    </ul>
                    <a href="academics.php" class="btn-flip">View Syllabus</a>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="icon-circle"><i class="fas fa-users-cog fa-3x"></i></div>
                    <h3>UI/UX & Leadership</h3>
                    <p>Design Thinking & Management</p>
                </div>
                <div class="flip-card-back">
                    <h3>The Skills</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Figma Wireframing</li>
                        <li><i class="fas fa-check"></i> Agile Methodologies</li>
                        <li><i class="fas fa-check"></i> Project Management</li>
                        <li><i class="fas fa-check"></i> Technical Writing</li>
                    </ul>
                    <a href="academics.php" class="btn-flip">View Syllabus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: #fff; overflow: hidden;">
    <div class="split-layout">
        <div class="vision-image-container" onclick="openFounderModal()" style="cursor: pointer;">
            <img src="assets/images/founder.jpg" alt="Director" class="vision-img">
            <div class="vision-badge"><i class="fas fa-quote-left"></i></div>
            <div class="click-hint"><i class="fas fa-expand-arrows-alt"></i> View Profile</div>
        </div>
        <div class="vision-text-content">
            <h4 style="color:var(--nga-gold); letter-spacing: 2px; font-weight: bold; text-transform: uppercase;">Leadership & Vision</h4>
            <h2 style="font-size: 2.5rem; color: var(--nga-blue); margin-bottom: 1.5rem;">"We are defining the future of <span style="border-bottom: 3px solid var(--nga-gold);">Rwandan Tech</span>."</h2>
            <div class="values-deck">
                <div class="val-card">
                    <div class="val-icon"><i class="fas fa-code-branch"></i></div>
                    <h5>Collaboration</h5>
                </div>
                <div class="val-card">
                    <div class="val-icon"><i class="fas fa-medal"></i></div>
                    <h5>Excellence</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--nga-light);">
    <div class="section-title">
        <h2>Student Innovation</h2>
        <p>Recent projects deployed by our students.</p>
    </div>
    <div class="grid-3">
        <?php if(count($projects) > 0): ?>
            <?php foreach($projects as $proj): ?>
            <div class="card news-card"> <div class="news-content">
                    <h3><?= htmlspecialchars($proj['title']) ?></h3>
                    <p style="color:#666; font-size:0.9rem;"><?= htmlspecialchars(substr($proj['description'], 0, 100)) ?>...</p>
                    <a href="#" class="read-more">View Project &rarr;</a>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="card news-card"><div class="news-content"><h3>Traffic IoT System</h3><p>Smart city solution using Arduino.</p></div></div>
            <div class="card news-card"><div class="news-content"><h3>School CMS</h3><p>PHP/MySQL dashboard for grades.</p></div></div>
            <div class="card news-card"><div class="news-content"><h3>E-Commerce App</h3><p>Full stack shopping platform.</p></div></div>
        <?php endif; ?>
    </div>
</section>

<section class="section counter-section" style="background: var(--nga-blue); color: white;">
    <div class="counter-grid">
        <div class="counter-item"><h2 class="count" data-target="150">0</h2><span>Graduates</span></div>
        <div class="counter-item"><h2 class="count" data-target="12">0</h2><span>Mentors</span></div>
        <div class="counter-item"><h2 class="count" data-target="45">0</h2><span>Projects</span></div>
        <div class="counter-item"><h2 class="count" data-target="10">0</h2><span>Partners</span></div>
    </div>
</section>

<footer>
    <div class="footer-grid">
        <div>
            <h4 style="color:var(--nga-gold)">NGA.ACADEMY</h4>
            <p>KG 28 Av, Kimihurura<br>Kigali, Rwanda</p>
        </div>
        <div>
            <h4>Quick Links</h4>
            <p><a href="#">Apply Now</a></p>
            <p><a href="#">Student Portal</a></p>
        </div>
        <div>
            <h4>Contact</h4>
            <p>info@nga.ac.rw</p>
            <p>+250 788 000 000</p>
        </div>
    </div>
    <p>&copy; 2026 New Generation Academy. Built by Group A.</p>
</footer>

<div class="floating-video-widget" onclick="openVideoModal()">
    <div class="floating-video-container" style="width:100%; height:100%; position:relative;">
        <video autoplay muted loop playsinline class="float-video">
            <source src="assets/videos/intro.mp4" type="video/mp4">
        </video>
        <div class="float-overlay"><i class="fas fa-play"></i></div>
    </div>
    <div class="float-text">Campus Tour</div>
</div>

<div id="videoModal" class="modal-overlay">
    <div class="video-modal-container" style="width:80%; max-width:800px; position:relative;">
        <span class="close-modal" onclick="closeVideoModal()" style="color:#fff; top:-40px; right:0;">&times;</span>
        <video controls id="mainVideo" style="width:100%; border-radius:8px;">
            <source src="assets/videos/intro.mp4" type="video/mp4">
        </video>
    </div>
</div>

<div id="founderModal" class="modal-overlay">
    <div class="profile-card-modal">
        <span class="close-modal" onclick="closeFounderModal()">&times;</span>
        <img src="assets/images/founder.jpg" style="width:100px; height:100px; border-radius:50%; margin-bottom:15px;">
        <h2>Mr. Jean Claude Tuyisenge</h2>
        <p style="color:var(--nga-gold); font-weight:bold;">MD & Co-Founder</p>
        <p>"Leading NGA to empower Rwanda's youth through technology."</p>
    </div>
</div>

<script>
    // PRELOADER
    window.addEventListener('load', () => {
        setTimeout(() => { document.getElementById('preloader').classList.add('hide-preloader'); }, 2000);
    });

    // COUNTERS
    const counters = document.querySelectorAll('.count');
    const observer = new IntersectionObserver((entries) => {
        if(entries[0].isIntersecting) {
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const updateCount = () => {
                    const count = +counter.innerText;
                    const inc = target / 100;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else { counter.innerText = target; }
                };
                updateCount();
            });
            observer.unobserve(entries[0].target);
        }
    }, { threshold: 0.5 });
    observer.observe(document.querySelector('.counter-section'));

    // MODALS
    function openVideoModal() {
        document.getElementById('videoModal').style.display = 'flex';
        document.getElementById('mainVideo').play();
    }
    function closeVideoModal() {
        document.getElementById('videoModal').style.display = 'none';
        document.getElementById('mainVideo').pause();
    }
    function openFounderModal() { document.getElementById('founderModal').style.display = 'flex'; }
    function closeFounderModal() { document.getElementById('founderModal').style.display = 'none'; }
    
    // Close on outside click
    window.onclick = function(e) {
        if (e.target.classList.contains('modal-overlay')) {
            e.target.style.display = 'none';
            if(e.target.id === 'videoModal') document.getElementById('mainVideo').pause();
        }
    }
</script>

</body>
</html>