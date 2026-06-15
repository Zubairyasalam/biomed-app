@extends('layouts.app')

@section('content')

@include('sections.topbar')
@include('sections.navbar')

    @php
        $bannerTitle = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_venue_title')->value('value') ?? 'VENUE';
        $bannerImage = \App\Models\SiteSetting::where('group', 'page_banners')->where('key', 'banner_venue_image')->value('value');
    @endphp
    <!-- Page Banner -->
    <div class="page-banner" style="{{ $bannerImage ? "background-image: linear-gradient(rgba(10, 25, 47, 0.7), rgba(10, 25, 47, 0.8)), url('" . asset($bannerImage) . "');" : '' }}">
        <div class="page-banner-content">
            <h1 style="text-transform: uppercase;">{{ $bannerTitle }}</h1>
        </div>
    </div>

<style>
    .venue-page-container {
        padding: 60px 20px;
        max-width: 1100px;
        margin: 0 auto;
        color: #444;
        line-height: 1.8;
    }

    /* Text Formatting */
    .v-text-center {
        text-align: center;
        max-width: 900px;
        margin: 0 auto 40px auto;
    }

    .v-title-center {
        text-align: center;
        font-size: 1.3rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
    }
    
    .v-text-justify {
        text-align: justify;
        font-size: 0.95rem;
    }

    .v-text-left {
        text-align: left;
        max-width: 900px;
        margin: 0 auto 40px auto;
    }

    .v-title-left {
        text-align: left;
        font-size: 1.2rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
    }

    .v-list {
        padding-left: 25px;
        margin-top: 15px;
        text-align: left;
    }

    .v-list li {
        margin-bottom: 10px;
        font-size: 0.95rem;
    }

</style>

<div class="venue-page-container">

    <!-- Venue Images & Map -->
    <div class="venue-grid">
        <!-- Tall Column (Left) -->
        <img src="{{ asset($settings['venue_image_main'] ?? 'images/mcc_main.jpg') }}" alt="Madras Christian College Main View">
        
        <!-- Stacked Column (Middle) -->
        <div class="venue-stack">
            <img src="{{ asset($settings['venue_image_sec1'] ?? 'images/mcc4.jpg') }}" alt="Madras Christian College Building">
            <img src="{{ asset($settings['venue_image_sec2'] ?? 'images/mcc_images.jpg') }}" alt="Madras Christian College Environment">
        </div>
        
        <!-- Map Column (Right) -->
        <div class="venue-map">
            <iframe src="{{ $settings['venue_map_src'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.756314815256!2d80.12157431482143!3d12.92336669088665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525f1719b49b39%3A0xcb1b5907406a0a03!2sMadras%20Christian%20College!5e0!3m2!1sen!2sin!4v1717409254320!5m2!1sen!2sin' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Discover MCC (Centered) -->
    <div class="v-text-center">
        <h2 class="v-title-center">{{ $settings['venue_discover_title'] ?? 'Discover Madras Christian College' }}</h2>
        <p class="v-text-justify">
            {!! nl2br(e($settings['venue_discover_text'] ?? 'Founded in 1837, Madras Christian College (MCC) is one of Asia\'s oldest and most prestigious academic institutions. Set within a sprawling, lush 320-acre scrub jungle campus in Tambaram, Chennai, MCC offers a serene, intellectually stimulating environment that provides a perfect backdrop for international conferences, global collaboration, and cutting-edge scientific exchange.')) !!}
        </p>
    </div>

    <!-- Hub of Heritage & Innovation (Centered) -->
    <div class="v-text-center">
        <h2 class="v-title-center">{{ $settings['venue_heritage_title'] ?? 'A Hub of Heritage & Innovation' }}</h2>
        <p class="v-text-justify">
            {!! nl2br(e($settings['venue_heritage_text'] ?? 'MCC seamlessly blends a rich historical legacy with modern scientific inquiry. With a profound history of producing renowned scholars, researchers, and global leaders, the institution continues to foster excellence. Its proximity to prominent research hubs in Chennai and its own state-of-the-art facilities make it an ideal meeting point for the BioMed Summit 2027.')) !!}
        </p>
    </div>

    <!-- Scenic Beauty (Centered Title & Intro, Left List) -->
    <div class="v-text-center">
        <h2 class="v-title-center">{{ $settings['venue_biodiversity_title'] ?? 'Campus Biodiversity & Environment' }}</h2>
        <p class="v-text-justify" style="margin-bottom: 5px;">
            {!! nl2br(e($settings['venue_biodiversity_text'] ?? 'The MCC campus is a documented sanctuary of rare flora and fauna, providing delegates with a refreshing escape from the urban hustle. During the conference, attendees can enjoy:')) !!}
        </p>
        <ul class="v-list">
            @php
                $bulletText = $settings['venue_biodiversity_list'] ?? "Exploring the expansive, protected scrub jungle ecosystem\nHistoric British-era architectural landmarks seamlessly integrated with modern halls\nA tranquil, pollution-free atmosphere ideal for focused scientific networking\nThe vibrant cultural heritage and traditional South Indian hospitality of Chennai";
                $bullets = array_filter(array_map('trim', explode("\n", $bulletText)));
            @endphp
            @foreach($bullets as $bullet)
                <li>{{ $bullet }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Easy Accessibility (Left) -->
    <div class="v-text-left">
        <h2 class="v-title-left">{{ $settings['venue_accessibility_title'] ?? 'Easy Accessibility' }}</h2>
        <p class="v-text-justify">
            {!! nl2br(e($settings['venue_accessibility_text'] ?? 'Located in the bustling metropolis of Chennai, MCC is exceptionally well-connected. It is easily accessible via the Chennai International Airport (MAA), which offers direct flights worldwide. Furthermore, the Tambaram Railway Station and major transit hubs are situated directly opposite the campus, ensuring seamless domestic and international travel for all delegates.')) !!}
        </p>
    </div>

    <!-- Conference Facilities (Left) -->
    <div class="v-text-left">
        <h2 class="v-title-left">{{ $settings['venue_facilities_title'] ?? 'World-Class Conference Facilities' }}</h2>
        <p class="v-text-justify">
            {!! nl2br(e($settings['venue_facilities_text'] ?? 'MCC boasts a wide array of premium venues, including historic grand auditoriums and highly equipped modern smart-halls. With advanced audio-visual technology, high-speed connectivity, and spacious seating, the campus provides a highly professional, comfortable, and accommodating environment for large-scale plenary sessions and specialized workshops alike.')) !!}
        </p>
    </div>

</div>

@include('sections.footer')

@endsection
