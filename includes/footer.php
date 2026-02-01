<footer class="site-footer">
    <div class="footer-container">
        
        <div class="footer-col">
            <img src="assets/images/logo.png" alt="NGA Logo" style="width: 120px; margin-bottom: 20px;">
            <p style="color: #a8b2d1; line-height: 1.8;">
                New Generation Academy is a center of excellence dedicated to equipping the next generation with production-ready software and hardware skills.
            </p>
            <div style="margin-top: 20px;">
                <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#" style="color: white; margin-right: 15px;"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" style="color: white;"><i class="fab fa-linkedin fa-lg"></i></a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Academics</h4>
            <ul style="list-style: none;">
                <li><a href="index.php#programs">Software Engineering</a></li>
                <li><a href="index.php#programs">Embedded Systems</a></li>
                <li><a href="students.php">Student Projects</a></li>
                <li><a href="instructors.php">Our Instructors</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Contact Us</h4>
            <ul style="list-style: none;">
                <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 10px;">
                    <i class="fas fa-map-marker-alt" style="color: var(--gold); margin-top: 5px;"></i>
                    <span>KG 28 Av, Kimihurura<br>Kigali, Rwanda</span>
                </li>
                <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-phone" style="color: var(--gold);"></i>
                    <span>+250 788 000 000</span>
                </li>
                <li style="display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-envelope" style="color: var(--gold);"></i>
                    <span>admissions@nga.ac.rw</span>
                </li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Campus Tour</h4>
            <div class="footer-video-widget" onclick="openVideoModal()" style="border: 1px solid var(--gold); border-radius: 8px; overflow: hidden; cursor: pointer; position: relative; height: 150px;">
                <video muted loop autoplay style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6;">
                    <source src="assets/videos/hero.mp4" type="video/mp4">
                </video>
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-play-circle" style="font-size: 3rem; color: var(--gold);"></i>
                </div>
            </div>
            <p style="font-size: 0.8rem; margin-top: 10px; color: #8892b0;">Click to watch the full tour.</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> New Generation Academy. <span style="color: var(--gold);">Excellence in Code.</span></p>
    </div>

    <div id="videoModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999; justify-content: center; align-items: center;">
        <span onclick="closeVideoModal()" style="position: absolute; top: 20px; right: 30px; color: white; font-size: 3rem; cursor: pointer;">&times;</span>
        <div style="width: 80%; max-width: 900px;">
            <video id="fullScreenVideo" controls style="width: 100%; border: 2px solid var(--gold); border-radius: 8px;">
                <source src="assets/videos/hero.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</footer>

<script>
    function openVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('fullScreenVideo');
        modal.style.display = 'flex';
        video.play();
    }

    function closeVideoModal() {
        const modal = document.getElementById('videoModal');
        const video = document.getElementById('fullScreenVideo');
        modal.style.display = 'none';
        video.pause();
    }
    
    // Close modal if clicked outside video
    window.onclick = function(event) {
        const modal = document.getElementById('videoModal');
        if (event.target == modal) {
            closeVideoModal();
        }
    }
</script>

<script src="assets/js/main.js"></script>
</body>
</html>