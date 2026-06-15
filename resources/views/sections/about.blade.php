<!-- About Section -->
<section class="about-section" style="padding-top: 30px; padding-bottom: 40px; background-color: #f8fbfa;">
    <div class="about-container" style="align-items: center;">
        <div class="about-content">
            <div class="section-subtitle">Welcome to the Conference</div>
            <h2 class="section-title">About <span>Conference</span></h2>
            <div class="about-text" style="text-align: justify;">
                {!! nl2br(e($settings['about_conference'] ?? 'The Department of Microbiology is delighted to announce this two-day conference...')) !!}
            </div>
        </div>
        <div class="about-countdown">
            <div class="countdown-header">{!! $settings['conf_stat_title'] ?? 'Conference <span>Starts In</span>' !!}</div>
            <div class="countdown-timer">
                <div class="cd-box"><div class="cd-val">{{ $settings['conf_stat1_number'] ?? '89' }}</div><div class="cd-lbl">{{ $settings['conf_stat1_label'] ?? 'DAYS' }}</div></div>
                <div class="cd-box"><div class="cd-val">{{ $settings['conf_stat2_number'] ?? '11' }}</div><div class="cd-lbl">{{ $settings['conf_stat2_label'] ?? 'HOURS' }}</div></div>
                <div class="cd-box"><div class="cd-val">{{ $settings['conf_stat3_number'] ?? '52' }}</div><div class="cd-lbl">{{ $settings['conf_stat3_label'] ?? 'MINS' }}</div></div>
                <div class="cd-box"><div class="cd-val">{{ $settings['conf_stat4_number'] ?? '31' }}</div><div class="cd-lbl">{{ $settings['conf_stat4_label'] ?? 'SECS' }}</div></div>
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
