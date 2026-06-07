<!-- About Section -->
<section class="about-section" style="padding-top: 0; padding-bottom: 60px;">
    <div class="about-container" style="align-items: center;">
        <div class="about-content">
            <div class="section-subtitle">Welcome to the Conference</div>
            <h2 class="section-title">About <span>Conference</span></h2>
            <div style="font-size: 1.15rem; line-height: 1.8; margin-bottom: 1.2rem;">
                {!! nl2br(e($settings['about_conference'] ?? 'The Department of Microbiology is delighted to announce this two-day conference...')) !!}
            </div>
        </div>
        <div class="about-countdown">
            <div class="countdown-header">Conference <span>Starts In</span></div>
            <div class="countdown-timer">
                <div class="cd-box"><div class="cd-val" id="days">481</div><div class="cd-lbl">Days</div></div>
                <div class="cd-box"><div class="cd-val" id="hours">00</div><div class="cd-lbl">Hours</div></div>
                <div class="cd-box"><div class="cd-val" id="minutes">41</div><div class="cd-lbl">Mins</div></div>
                <div class="cd-box"><div class="cd-val" id="seconds">30</div><div class="cd-lbl">Secs</div></div>
            </div>
            <div class="mission-box">
                <h4>Our Mission</h4>
                <p>{!! nl2br(e($settings['about_mission'] ?? 'To connect researchers, thought leaders, and institutions through impactful events that inspire knowledge-sharing and real-world solutions.')) !!}</p>
            </div>
            <div class="mission-box mt-30">
                <h4>Our Vision</h4>
                <p>{!! nl2br(e($settings['about_vision'] ?? 'To build a global platform that showcases research, fosters collaboration, and drives innovation across disciplines.')) !!}</p>
            </div>
        </div>
    </div>
</section>
