<div style="position: relative; background: var(--light-bg); height: 100px; overflow: hidden;">
    <svg viewBox="0 0 1440 320" preserveAspectRatio="none" style="position: absolute; bottom: 0; width: 100%; height: 100%; fill: #020c1b;">
        <path d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,224C672,245,768,267,864,250.7C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192V320H1392C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320H0Z"></path>
    </svg>
</div>

<footer class="site-footer" style="padding-top: 20px;"> <div class="footer-container">
        
        <div class="footer-col">
            <img src="assets/images/logo.png" alt="NGA Logo" style="width: 120px; margin-bottom: 20px;">
            <p style="color: #8892b0; font-size: 0.95rem;">
                Forging the next generation of <span style="color: var(--gold);">Software Engineers</span> and <span style="color: var(--gold);">Hardware Architects</span>.
            </p>
        </div>

        <div class="footer-col">
            <h4>Academics</h4>
            <ul class="footer-links">
                <li><a href="index.php#programs">Software Engineering</a></li>
                <li><a href="index.php#programs">Embedded Systems</a></li>
                <li><a href="students.php">Student Projects</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contact</h4>
            <ul class="contact-list">
                <li><i class="fas fa-map-marker-alt"></i> Kigali, Rwanda</li>
                <li><i class="fas fa-phone"></i> +250 788 000 000</li>
                <li><i class="fas fa-envelope"></i> admissions@nga.ac.rw</li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Campus Tour</h4>
            <div class="footer-video-widget" onclick="openVideoModal()">
                <video muted loop autoplay playsinline>
                    <source src="assets/videos/hero.mp4" type="video/mp4">
                </video>
                <div class="play-overlay"><i class="fas fa-play"></i></div>
            </div>
        </div>

    </div>
    
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> New Generation Academy.</p>
    </div>

    <div id="videoModal" class="modal-overlay" onclick="closeVideoModal()">
        <div class="modal-video-container">
            <span class="close-modal">&times;</span>
            <video id="fullScreenVideo" controls>
                <source src="assets/videos/hero.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</footer>