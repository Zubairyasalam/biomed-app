<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-subtitle">{{ $settings['hero_subtitle'] ?? 'Bridging Microbes, Molecules & Mankind for Sustainability' }}</div>
        <h1 class="hero-title">
            {!! nl2br(e($settings['hero_title'] ?? 'GLOBAL ONE HEALTH CONFLUENCE  2026')) !!}
        </h1>
        <p class="hero-desc">
            {{ $settings['hero_organized_by'] ?? 'Organized by Department of Microbiology & Department of Chemistry (SFS)' }}<br>
            {{ $settings['hero_location'] ?? 'Madras Christian College, Chennai' }}<br>
            <strong>{{ $settings['hero_dates'] ?? '21st and 22nd December 2026' }}</strong>
        </p>
        <div class="hero-actions">
            <a href="{{ url($settings['hero_btn1_link'] ?? route('registration')) }}" class="btn btn-navy">{{ $settings['hero_btn1_text'] ?? 'REGISTER NOW' }}</a>
            <a href="{{ url($settings['hero_btn2_link'] ?? route('submit-paper')) }}" class="btn btn-outline">{{ $settings['hero_btn2_text'] ?? 'SUBMIT ABSTRACT' }} <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>
