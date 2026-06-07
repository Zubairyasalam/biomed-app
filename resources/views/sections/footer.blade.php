<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="footer-contact-bar">
            <div class="fc-item">
                <div class="fc-icon-box">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="fc-text">
                    <strong>Reach Us</strong>
                    <p style="font-size: 0.9rem; line-height: 1.3;">{!! nl2br(e($settings['contact_address'] ?? 'Madras Christian College\nTambaram East, Chennai 600 059')) !!}</p>
                </div>
            </div>
            <div class="fc-item">
                <div class="fc-icon-box">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="fc-text">
                    <strong>Email Us</strong>
                    <p>{{ $settings['contact_email'] ?? 'contact@biomedsummit.org' }}</p>
                </div>
            </div>
            <div class="fc-item">
                <div class="fc-icon-box">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div class="fc-text">
                    <strong>Website</strong>
                    <p><a href="https://mcc.edu.in/" target="_blank" style="color: inherit; text-decoration: none;">https://mcc.edu.in/</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="footer-col brand-col">
            <a href="/" class="footer-logo" style="text-decoration: none;">
                <img src="{{ asset('images/logo.png') }}" alt="BioMed Summit Logo" style="max-width: 220px; height: auto; filter: invert(1) hue-rotate(180deg) brightness(1.2); mix-blend-mode: screen;">
            </a>
            <p>We bring together brilliant minds from around the world to create transformative platforms for knowledge exchange, collaboration, and innovation.</p>
        </div>
        <div class="footer-col">
            <h3>Useful <span>Links</span></h3>
            <ul>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Home</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Abstract Submission</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Speakers</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Committee</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Quick <span>Links</span></h3>
            <ul>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Terms & Conditions</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Privacy Policy</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Cancellation Policy</a></li>
                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i> Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy;2026 <span>Biomed Summit</span> all rights reserved</p>
        <a href="#" class="back-to-top"><i class="fa-solid fa-angles-up"></i></a>
    </div>
</footer>
