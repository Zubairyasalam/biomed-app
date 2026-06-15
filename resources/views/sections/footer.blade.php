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
                    <p><a href="{{ $settings['footer_website'] ?? 'https://mcc.edu.in/' }}" target="_blank" style="color: inherit; text-decoration: none;">{{ $settings['footer_website'] ?? 'https://mcc.edu.in/' }}</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="footer-col brand-col">
            <a href="/" class="footer-logo" style="text-decoration: none;">
                @php $logo = $settings['footer_logo'] ?? 'images/logo.png'; @endphp
                <img src="{{ str_starts_with($logo, 'http') ? $logo : asset($logo) }}" alt="BioMed Summit Logo" style="max-width: 220px; height: auto; filter: invert(1) hue-rotate(180deg) brightness(1.2); mix-blend-mode: screen;">
            </a>
            <p>{{ $settings['footer_bio'] ?? 'We bring together brilliant minds from around the world to create transformative platforms for knowledge exchange, collaboration, and innovation.' }}</p>
        </div>
        <div class="footer-col">
            <h3>Useful <span>Links</span></h3>
            <ul>
                @php
                    $usefulLinksStr = $settings['footer_useful_links'] ?? "Home | /\nAbstract Submission | #\nSpeakers | #\nCommittee | #";
                    $usefulLinks = explode("\n", str_replace("\r", "", $usefulLinksStr));
                @endphp
                @foreach($usefulLinks as $link)
                    @php $parts = explode('|', $link); @endphp
                    @if(count($parts) >= 1 && trim($parts[0]) !== '')
                        <li><a href="{{ count($parts) > 1 ? trim($parts[1]) : '#' }}"><i class="fa-solid fa-circle-arrow-right"></i> {{ trim($parts[0]) }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="footer-col">
            <h3>Quick <span>Links</span></h3>
            <ul>
                @php
                    $quickLinksStr = $settings['footer_quick_links'] ?? "Terms & Conditions | #\nPrivacy Policy | #\nCancellation Policy | #\nContact | #";
                    $quickLinks = explode("\n", str_replace("\r", "", $quickLinksStr));
                @endphp
                @foreach($quickLinks as $link)
                    @php $parts = explode('|', $link); @endphp
                    @if(count($parts) >= 1 && trim($parts[0]) !== '')
                        <li><a href="{{ count($parts) > 1 ? trim($parts[1]) : '#' }}"><i class="fa-solid fa-circle-arrow-right"></i> {{ trim($parts[0]) }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>{{ $settings['footer_copyright'] ?? '©2026 Biomed Summit all rights reserved' }}</p>
        <a href="#" class="back-to-top"><i class="fa-solid fa-angles-up"></i></a>
    </div>
</footer>
